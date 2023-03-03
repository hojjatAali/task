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
        $tasks = $this->repository->search('task', [['user_id', $user_id]]);
        view('task/index', compact('tasks'));
    }

    public function show()
    {
        $task = $this->repository->find('task', $_GET['id']);

        view('task/show', compact('task'));
    }

    public function edit()
    {
        $task = $this->repository->find('task', $_GET['id']);
        

        view('task/edit', compact('task'));
    }

    public function update()
    {
        $id = (int)$_GET['id'];

        $task = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'group_id' => $_POST['group_id']
        ];

        $this->repository->update('task', $id, $task);

        header('location:/tasks');
    }

    public function delete()
    {
        $id = (int)$_GET['id'];
        // $this->repository->delete('task', $id);
        $deletedtask = ['is_delete' =>1];
        $this->repository->update('task', $id, $deletedtask);
        header('location:/tasks');
    }

    public function store()
    {
        $task = [
            'user_id' => $_SESSION[$_COOKIE['id']],
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'group_id' => $_POST['group_id']
        ];
        $this->repository->insert($task, 'task');
        header('location:/tasks');
    }
}
