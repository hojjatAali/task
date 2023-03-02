<?php

require_once __DIR__.'/../layout/header.php';

?>


<form action="/task" method="post" class="container mt-5">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="title" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">title of task</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="text" name="content" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">content</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">create task</button>

</form>

</body>
</html>
