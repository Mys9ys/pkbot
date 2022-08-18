<?php

namespace project\controllers;

use Core\Controller;

class AuthController extends Controller
{
    public function index(){
        $this->title = 'Авторизация';
        return $this->render('auth/index');
    }
}