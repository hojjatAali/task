<?php

namespace Src\controler;

use Src\model\Repository\Repository;

class TaskController
{

    private Repository $repository;

    public function __construct()
    {
        $this->repository = new Repository();
    }




    public function create()
    {

        view('task/create');



    }


    public function index()
    {
        $user_id = $_SESSION[$_COOKIE['id']];
        $tasks = $this->repository->search('task', ['user_id', $user_id]);
        view('task/index',compact('tasks'));

    }

    public function show($data)
    {
        $task = $this->repository->find('task', $data['id']);
       
        view('task/show',compact('task'));


    }

    public function edit($data)
    {
        $task=$this->repository->find('task',$data['id']);
        view('task/edit',compact('task'));


    }

    public function update($data)
    {
        $id= (int)$data['id'];

        $task=[
            'title'=>$_POST['title'],
            'content'=> $_POST['content']
        ];

        $this->repository->update('task',$id,$task);

        header('location:/tasks');
    }

    public function delete($data)
    {
        $id= (int)$data['id'];
        $deletedtask = ['is_delete' =>1];
        $this->repository->update('task', $id, $deletedtask);
        header('location:/tasks');
    }

    public function store()
    {
        $task=[
          'title'=>$_POST['title'],
          'content'=> $_POST['content']
        ];
        $this->repository->insert($task,'task');
        view('task/index');


    }




}
