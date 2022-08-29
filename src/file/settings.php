<?php
$arr = [
    'max lvl' => '50'

];

$fp = fopen('settings.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);
