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


    public function read()
    {

        $tasks = $this->repository->read('task');
        view('task/index');

    }

    public function show($index)
    {

        $task = $this->repository->find('task', $index);
        view('task/show');


    }

    public function edit($id)
    {
        $editabletask=$this->repository->find('task',$id);





    }

    public function update()
    {


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
