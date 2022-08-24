<?php

namespace project\controllers;

use Core\Controller;

class BotController extends Controller
{
    public function index()
    {
        $this->title = 'Подземелье';
        return $this->render('bot/index');
    }
}