<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ? : 'Наш фреймворк' ?></title>

    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">


</head>
<body>
<header>
<!--    хедер сайта-->
</header>
<div class="container">
    <aside class="sidebar left">
<!--        левый сайдбар-->
    </aside>
    <main>
        <?= $content ?>
    </main>
    <aside class="sidebar right">
<!--        правый сайдбар-->
    </aside>
</div>
<footer>
<!--    футер сайта-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/src/bot/script.js"></script>
<!--    <script src="--><?//$_SERVER['DOCUMENT_ROOT']?><!--/project/views/bot/script.js"></script>-->


</footer>
</body>
</html>
