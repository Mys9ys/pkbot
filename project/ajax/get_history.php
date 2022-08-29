<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/autoload.php';

use Core\Messages;

$mes = new Messages();

$res = $mes->getStepInfo();