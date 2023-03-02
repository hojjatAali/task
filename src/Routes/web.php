<?php

use Src\controler\HomeControler;
use Src\controler\LoginControler;
use Src\controler\RegisterControler;
use Src\controler\TaskController;
use Src\Core\Router;
use Src\controler\GroupController;


Router::get('/login', [LoginControler::class, 'create']);
Router::get('/', [HomeControler::class, 'index']);

Router::post('/task',[TaskController::class,'store']);
Router::get('/task',[TaskController::class,'create']);
Router::get('/tasks',[TaskController::class,'index']);
Router::get('/show',[TaskController::class,'show']);
Router::get('/edit',[TaskController::class,'edit']);
Router::post('/edit',[TaskController::class,'update']);
Router::post('/delete',[TaskController::class,'delete']);

Router::post('/login', [LoginControler::class, 'store']);
Router::post('/logout', [LoginControler::class, 'destroy']);

Router::get('/register', [RegisterControler::class, 'create']);
Router::post('/register', [RegisterControler::class, 'store']);

Router::get('/group', [GroupController::class, 'create']);
Router::post('/group', [GroupController::class, 'store']);
Router::get('/groups', [GroupController::class, 'index']);


Router::post('/add', [GroupController::class, 'addUser']);


