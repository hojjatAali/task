<?php
require_once __DIR__ . '/../layout/header.php';
?>

<ul>
    <?php
    foreach ($groups as $group) {
    ?>
        <li>
            <a href="/showgroup?id=<?= $group->id ?>"><?= $group->name ?></a>
        </li>
    <?php  } ?>
</ul>


</body>

</html>