<?php

require_once __DIR__.'/../layout/header.php';

// var_dump($groups, $users);die();
    ?>

<form action="/add" method="post">
<div>
  <label for="group"></label>
  <select name="group" >
    <?php
    foreach($groups as $group){?>
      <option value="<?=$group['id']?>"><?=$group['name']?></option>
   <?php }?>
  </select>
</div>

<div>
  <label for="user"></label>
  <select name="user" >
    <?php
    foreach($users as $user){?>
      <option value="<?=$user['id']?>"><?=$user['name']?></option>
   <?php }?>
  </select>
</div>

<input type="submit" value="add">

</form>
   


       








