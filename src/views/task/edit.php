<?php

require_once __DIR__ . '/../layout/header.php';

?>


<form action="/edit?id=<?= $task['id'] ?>" method="post" class="container mt-5">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">title of task</label>
        <input type="text" name="title" id="form2Example1" class="form-control" value="<?= $task['title'] ?>" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">content</label>
        <input type="text" name="content" id="form2Example2" class="form-control" value="<?= $task['content'] ?>" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="group_id">Group</label>
        <select name="group_id">
            <?php
            foreach ($groups as $group) {
            ?>
                <option value="<?= $group['id'] ?>"><?= $group['name'] ?></option>
            <?php } ?>
        </select>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">edit task</button>

</form>