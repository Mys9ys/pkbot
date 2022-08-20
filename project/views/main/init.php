<h1>start </h1>
<?php
//$query = file_get_contents('https://oauth.vk.com/authorize?client_id=51405617&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=friends&response_type=token&v=5.131');
//https://oauth.vk.com/authorize?client_id=5490057&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=friends&response_type=token&v=5.131
$vk = getjump\Vk\Core::getInstance()->apiVersion('5.131')->setToken('vk1.a.C_IgJJaweuM5jyUPhHyyrD2n514w45gUpn-lS7opVZ4gx0TMq41HvH7DtkYEFvXtlr9x_IA-f6t0n2Hm8NXtTn0JY8V3tgm21uB5Cc9cpsaI6BUr03vzoEhf6NbENAHBsbmNiVVKyavMX9FFsukv8WPxuGxCkC-KSIpNYNhX9V27wv9MhXRkgyJUCE9XFPUn');
echo '<pre>';
var_dump($vk);
//var_dump(json_decode($query, true));
echo '</pre>';


$vk = getjump\Vk\Core::getInstance()->apiVersion('5.131');

$auth = getjump\Vk\Auth::getInstance();
$auth->setAppId('51405617')->setScope('SCOPE')->setSecret('SECRET CODE')->setRedirectUri('http://localhost/test.php'); // SETTING ENV
$token=$auth->startCallback(); // Here we will have token, if everything okay

printf("<a href='%s' target='_top'>LINK</a>", $auth->getUrl());
if($token) {
    $vk->setToken($token);
    $vk->request('users.get', ['user_ids' => range(1, 100)])->each(function($i, $v) {
        if($v->last_name == '') return;
        print $v->last_name . '<br>';
    });
}