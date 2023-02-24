<?php

namespace Src\request\rules;

class Required
{
    public function handler($key,$value, $table){

        if(empty($value)){
            $_SESSION['error'][$key]=" this $key is required";
            return false;
        }

        return true;

    }




}