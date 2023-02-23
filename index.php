<?php

use Src\core\Router;

require_once './vendor/autoload.php';
require_once './src/Routes/web.php';


Router::find($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

