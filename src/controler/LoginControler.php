<?php

namespace Src\controler;


use Src\model\Repository\Repository;

class LoginControler
{

    private Repository $repository;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function create()
    {
        return view('Login/Create');

    }

    public function store()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->repository->finedByEmail($email);

        if ($user == null) {
            return view('Login/create');
        }
        if ($password !== $user['password']) {

            return view('Register/Create');

        }

        login($user);

        return view('home/home');


    }

    public function destroy()
    {
        logout();
        return view('home/home');
    }


}
