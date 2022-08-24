<?php

use Core\Auth;

if($_REQUEST['username']) {
    $auth = new Auth($_REQUEST['username'], $_REQUEST['password']);
} else {
    $auth = new Auth();
}

if (!$auth->getAuthToken()) {?>
    <form action="/auth/" method="post">
        <input type="text" name="username" placeholder="login vk">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Зарегистрироваться</button>
    </form>

<?php } else {?>
    <p>Вы зарегистрированы</p>
    <a href="/">На главную</a>
<?php }?>