<?php
namespace App\Controllers;

use Firebase\JWT\JWT;
use App\Models\User;
use App\Validations\Auth\LoginValidation;

class AuthController
{

    /** [GET] /
     * Show login page
     * @return void
     */
    public function showLoginForm()
    {
        $_token = $_COOKIE['_token'] ?? null;
        if ($_token)
            header('Location: /home');
        return view('index');
    }


    /** [POST] /auth/login
     * Receive login request
     * @return void
     */
    public function login()
    {
        $data = [
            'userName' => $_POST['userName'] ?? null,
            'password' => $_POST['password'] ?? null,
        ];
        $validation = new LoginValidation($data);
        $validation->validate();
        if ($validation->getErrors())
            return view('index', ['errorMessage' => $validation->getErrors()]);

        // Check login
        $user = User::where('user_name', $data['userName'])->first();
        if (!$user)
            return view('index', ['errorMessage' => ['userName' => 'Tài khoản không tồn tại']]);
        if ($user['password'] !== $data['password'])
            return view('index', ['errorMessage' => ['password' => 'Mật khẩu không chính xác']]);

        // Genarate token
        $exp = time() + (60 * 60);
        $payload = [
            'user_name' => $data['userName'],
            'iat' => time(),
            'exp' => $exp // Token hết hạn sau 1 giờ
        ];
        $_token = JWT::encode($payload, $_ENV['SECRET_KEY'], 'HS256');
        setcookie('_token', $_token, $exp, '/', $_ENV['APP_HOST'], true, true);

        header('Location: /home');
    }

    /** [POST] /auth/logout
     * Receive logout request
     * @return void
     */
    public function logout()
    {
        if ($_POST['_token'] !== $_COOKIE['_token'])
            return view('403');
        setcookie('_token', '', -1, '/', $_ENV['APP_HOST'], true, true);
        header('Location: /');
    }


}
