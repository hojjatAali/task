<?php

namespace Src\request\rules;

use Src\Core\QueryBuilder;

class Unique
{


    /**
     * @throws \Exception
     */
    public function handler($key, $value, $table){

        $other_record=QueryBuilder::table($table)->select()->where($key,$value)->get();

        if($other_record){
            $_SESSION['error'][$key]="this $value already  exist in database";
            return false;
        }

        return true;

    }

}