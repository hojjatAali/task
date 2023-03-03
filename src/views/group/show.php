<?php

require_once __DIR__ . '/../layout/header.php';
var_dump($group);

?>


<h1><?= $group->name ?></h1>
<hr>

<p><?= $task['content'] ?></p>

<a href="/edit?id=<?= $task['id'] ?> ">
    <button name="edit">edit</button>
</a>

