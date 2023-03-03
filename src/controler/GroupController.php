<?php

namespace Src\controler;

use Src\model\Repository\Repository;

class GroupController
{

  private Repository $repository;

  public function __construct()
  {
    $this->repository = new Repository();
  }

  public function index()
  {
    $groups = $this->repository->read('groups');

    $users = $this->repository->read('user');
  
    view('group/index', compact('groups', 'users'));
  }
  public function create()
  {

    view('group/create');
  }

  public function store()
  {
    $group = ['name' => $_POST['name']];
    $this->repository->insert($group, 'groups');

    $users = $this->repository->read('user');
    $groups = $this->repository->read('groups');


    view('group/index',compact('users', 'groups'));
  }
  public function addUser()
  {

    $data = [
      'user_id' => (int)$_POST['user'],
      'group_id' => (int)$_POST['group']
    ];

    $this->repository->insert($data, 'group_user');

    header('location:/groups');
  }

  public function show()
  {
    $id = (int)$_GET['id'];
    $group = $this->repository->find('groups', $id);
    // select id, name from user join group_user on user.id = group_user.user_id
    // 

    view('group/show',compact('group'));
  }
}
