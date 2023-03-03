<?php

require_once __DIR__.'/../layout/header.php';

// var_dump($groups, $users);die();
    ?>

<form action="/add" method="post">
<div>
<label class="form-label" for="group">Group Name</label>
  <select name="group" class="form-control">
    <?php
    foreach($groups as $group){?>
      <option value="<?=$group->id?>"><?=$group->name?></option>
   <?php }?>
  </select>
</div>

<div>
<label class="form-label" for="user">User</label>
  <select name="user" class="form-control">
    <?php
    foreach($users as $user){?>
      <option value="<?=$user->id?>"><?=$user->name?></option>
   <?php }?>
  </select>
</div>

<input type="submit" value="add">

</form>
   


       








