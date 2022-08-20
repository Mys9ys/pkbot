<?php

use Core\Auth;

$auth = new Auth();

if (!$auth->getAuthToken()) {?>
    <a href="<?= $auth->vkUrl ?><?= http_build_query($auth->params) ?>">Регистрация</a>
<?php } ?>

