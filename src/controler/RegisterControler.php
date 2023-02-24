<?php

namespace Src\controler;

use Src\model\Repository\Repository;
use Src\request\form_rules\Register;
use Src\request\Validator;

class RegisterControler
{


    private Repository $repository;
    private Validator $validator;

    public function __construct()
    {
        $this->repository=new Repository();
        $this->validator= new Validator();
    }

    public function create()
    {
        return view('register/Create');


    }

    public function store()
    {
        unset($_SESSION['error']);
       $is_valid= $this->validator->make(Register::class);
       if(!$is_valid){
           view('register/create');
       }

        $user = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

         $this->repository->insert($user,'user');

        return view('login/create');


    }

}