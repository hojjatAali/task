<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="bg-white shadow p-2 my-3 rounded-2 border fw-bold menu d-flex justify-content-between">
                <a href="/" class="text-decoration-none">Home</a>
                <a href="/tasks" class="text-decoration-none">tasks</a>

                <?php
                if(!\Src\Core\Session::authCheck()) : ?>

                    <a href="/login" class="text-decoration-none">login</a>
                    <a href="/register" class="text-decoration-none">register</a>

                <?php else : ?>

                    
                    <a href="/task" class="text-decoration-none">create task</a>
                    <a href="/group" class="text-decoration-none">create group</a>

                    <form action="/logout" method="POST">
                        <div class="form-group">
                            <input type="submit" value="logout" class="btn btn-danger btn-sm">
                        </div>
                    </form>

                <?php endif; ?>
            </div>
        </div>
    </div>

</body>
</html>