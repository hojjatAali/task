<?php

use Src\controler\HomeControler;
use Src\controler\LoginControler;
use Src\controler\RegisterControler;
use Src\controler\TaskController;
use Src\Core\Router;


Router::get('/login', [LoginControler::class, 'create']);
Router::get('/', [HomeControler::class, 'index']);

Router::post('/task',[TaskController::class,'store']);
Router::get('/task',[TaskController::class,'create']);

Router::post('/login', [LoginControler::class, 'store']);
Router::post('/logout', [LoginControler::class, 'destroy']);

Router::get('/register', [RegisterControler::class, 'create']);
Router::post('/register', [RegisterControler::class, 'store']);

