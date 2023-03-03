<?php

namespace Src\controler;

use Src\model\Repository\Repository;

class HomeControler
{
    public Repository $repository;
    public function __construct()
    {
        $this->repository = new Repository();
    }


    public function index(){
        $groups = $this->repository->read('groups');

        view('home/index', compact('groups'));
    }

}