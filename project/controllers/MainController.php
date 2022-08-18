<?php

namespace project\controllers;

use Core\Controller;
use Core\tAuth;


class MainController extends Controller
{

    use tAuth;

    public function init(){

        if(!$this->authToken) return $this->render('auth/index');

        $this->title = 'Main';
        return $this->render('main/init');
    }
}