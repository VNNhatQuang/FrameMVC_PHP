<?php
namespace App\Requests;


function UpdateUserRequest(mixed $data = [])
{
    $password = $data['password'];
    if ($password === "" || !isset($password))
        return false;
    return true;
}
