<?php

namespace Src\request\form_rules;

class Register
{

    public function getRules(){

        return [
            'name'=>['required'],
            'email'=>['unique:user','required'],
            'password'=>['required']
        ];

    }

}