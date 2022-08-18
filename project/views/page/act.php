<?php
/** @var TYPE_NAME $header */
/** @var TYPE_NAME $users */?>
<h1><?=$header ?></h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user; ?></li>
    <?php endforeach; ?>
</ul>