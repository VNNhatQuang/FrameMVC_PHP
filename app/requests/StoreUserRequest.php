<?php

include_once "app/models/User.php";


function StoreUserRequest(mixed $data = [])
{
    $userName = $data['userName'];
    $password = $data['password'];
    $User = new User();
    if ($userName == "" || $userName == null || $User->IdExits($userName))
        return false;
    if ($password === "" || !isset($password) || isAllWhitespace($password))
        return false;
    return true;
}
