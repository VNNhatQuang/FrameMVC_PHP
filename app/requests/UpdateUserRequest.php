<?php


function UpdateUserRequest(mixed $data = [])
{
    $password = $data['password'];
    if ($password === "" || !isset($password) || isAllWhitespace($password))
        return false;
    return true;
}
