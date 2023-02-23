<?php


function view($name){

    require  './src/views/'. $name .'.php';

}

function login(array $user){

    $_SESSION[$user['id']] = $user['id'];
    setcookie('id', $user['id']);
}

function logout(){
    $_SESSION[$_COOKIE['id']] = null;
    $_COOKIE['id'] = null;
}

function redirect($name){
    header("Location:{$name}");
}
