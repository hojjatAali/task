<?php

require_once __DIR__.'/../layout/header.php';


    ?>


   <?php foreach ($tasks as  $value){?>
    <ul>
        <li>
             <?= " title : ".$value->title?>
        </li>
        <li>
            <?= "content  : ".$value->content?>
        </li>

    </ul>

     <a href="/show?id=<?=$value->id?>"> <button >read more</button></a>

     <form action="/delete?id=<?=$value->id?>" method="post">
     <input type="submit" value="delete">
    </form>



       <?php
}
?>








