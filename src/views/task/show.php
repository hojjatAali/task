<?php

require_once __DIR__ . '/../layout/header.php';

?>


<h1><?= $task['title'] ?></h1>
<hr>

<p><?= $task['content'] ?></p>

<a href="/edit?id=<?= $task['id'] ?> ">
    <button name="edit">edit</button>
</a>

