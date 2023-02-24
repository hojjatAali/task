<?php

namespace Src\request;

use Src\request\form_rules\Register;

class Validator
{
    public array $rules = [];


    public function make($class)
    {

        $this->rules = (new $class)->getRules();
        return $this->runRules();

    }


    public function runRules()
    {
        $data = $_POST;
        foreach ($data as $key => $value) {
            foreach ($this->rules[$key] as $rule) {
                $role_class = $this->resovleClass($rule);
                $table = $this->resolveParams($rule);
                $role_class->handler($key, $value, $table);
            }
        }
        if (empty($_SESSION['error'])) {
            return true;
        }
        return false;
    }


    public function resovleClass($rule)
    {

        $rule_array = explode(':', $rule);
        $class = "Src\\Request\\Rules\\" . ucfirst($rule_array[0]);
        return new  $class;
    }

    public function resolveParams($rule)
    {
        $rule_array = explode(':', $rule);
        return $rule_array[1] ?? null;


    }


}