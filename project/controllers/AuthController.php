<?php

namespace project\controllers;

use Core\Controller;

class AuthController extends Controller
{
    public function index(){
        $this->title = 'Авторизация';
        return $this->render('auth/index');
    }

    public function oauth(){
        $this->title = 'Регистрация завершена';
        return $this->render('auth/oAuth');
    }
}