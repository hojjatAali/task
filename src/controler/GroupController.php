<?php

namespace Src\controler;

use Src\model\Repository\Repository;

class GroupController{

  private Repository $repository;

    public function __construct()
    {
        $this->repository=new Repository();
    }

  public function index(){
    $groups = $this->repository->read('groups');
    
    $users = $this->repository->read('user');
    view('group/index', compact('groups', 'users'));

  }
    public function create(){
    
    view('group/create');
  }

  public function store(){
    $group = ['name'=>$_POST['name']];
    $this->repository->insert($group, 'groups');


    view('group/index',);

  }
public function addUser(){

  $data = [
    'user_id'=>(int)$_POST['user'],
    'group_id'=>(int)$_POST['group']
  ];
  // var_dump($data); die();

  $this->repository->insert($data, 'group_user');

  header('location:/groups');
}

}