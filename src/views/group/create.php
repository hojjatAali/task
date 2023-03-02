<?php

require_once __DIR__.'/../layout/header.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create task</title>
</head>
<body>

<form action="" method="post" class="container mt-5">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="name" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Group Name</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Create Group</button>

</form>

</body>
</html>
