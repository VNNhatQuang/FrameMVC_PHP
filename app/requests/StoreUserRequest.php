<?php


function StoreUserRequest(mixed $data = [])
{
    $userName = $data['userName'];
    $password = $data['password'];
    if ($userName == "" || $userName == null)
        return false;
    if ($password === "" || !isset($password))
        return false;
    return true;
}
