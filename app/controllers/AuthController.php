<?php
namespace App\Controllers;

use App\Models\User;
use App\Validations\Auth\LoginValidation;


class AuthController
{

    /**
     * Show login page
     * @return void
     */
    public function showLoginForm()
    {
        return view('index');
    }


    /**
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
        if ($validation->getErrors()) return view('index', [
            'errorMessage'=> $validation->getErrors()
        ]);
        
        header("Location: /home");
    }

}
