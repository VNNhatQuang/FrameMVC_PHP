<?php
namespace App\Middlewares;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Authenticate
{
    public function handle()
    {
        $_token = $_COOKIE['_token'] ?? null;
        try {
            $user = JWT::decode($_token, new Key($_ENV['SECRET_KEY'], 'HS256'));
            $_REQUEST['user'] = $user;
            return;
        } catch (\Throwable $th) {
            setcookie('_token', '', -1, '/', $_ENV['APP_HOST'], true, true);
            http_response_code(401);
            header('Location: /');
        }
    }
}
