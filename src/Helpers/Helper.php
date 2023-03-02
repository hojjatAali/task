<?php


function view($name, $data = null)
{

    isset($data) ? extract($data) :null;
    require './src/views/' . $name . '.php';

}

function login(array $user)
{

    $token = strval(bin2hex(random_bytes(2)));
    $_SESSION[$token] = $user['id'];
    setcookie('id', $token);
}

function logout()
{
    unset($_SESSION[$_COOKIE['id']]);
    $_COOKIE['id'] = null;
}

function redirect($name)
{
    header("Location:{$name}");
}
