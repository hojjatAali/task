<?php

namespace Src\controler;

use Src\model\Repository\Repository;

class RegisterControler
{


    private Repository $repository;

    public function __construct()
    {
        $this->repository=new Repository();
    }

    public function create()
    {
        return view('login/Create');


    }

    public function store()
    {
        $user = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

         $this->repository->insert($user);

        return view('home/home');


    }

}