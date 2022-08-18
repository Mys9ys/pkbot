<?php

namespace project\controllers;

use Core\Controller;

class MainController extends Controller
{
    public function init(){
        $this->title = 'Main';
        return $this->render('main/init');
    }
}