<?php


function view($name){

    require  './src/views/'. $name .'.php';

}

function login(array $user){

    $_SESSION[$user['email']] = $user['name'];

    setcookie('email', $user['email']);
}

function logout(){
    $_SESSION[$_COOKIE['email']] = null;
    $_COOKIE['email'] = null;
}

function redirect($name){
    header("Location:{$name}");
}
