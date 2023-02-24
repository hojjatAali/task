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

        $tasks = $this->repository->read('task');
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

    public function delete()
    {



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
