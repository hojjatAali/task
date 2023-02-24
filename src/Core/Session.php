<?php

namespace Src\Core;

class Session
{


    public static function authCheck()
    {

        return isset($_COOKIE['id']) & isset($_SESSION[$_COOKIE['id']]);


    }

}