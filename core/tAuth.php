<?php

namespace Core;

trait tAuth
{
    public $vkUrl = 'https://oauth.vk.com/authorize?';
    private $clientId = '51405617';
    protected $authToken = '';
    private $redirectUri = 'auth/';

    public $params = [];

    public function __construct(){
        $this->params = [
            'client_id' => $this->clientId,
            'display' => 'page',
//            'redirect_uri' =>  '/' . $_SERVER['HTTP_HOST'] . '/' . $this->redirectUri,
            'redirect_uri' =>  'http://pkbot.loc/auth/',
            'scope' => 'friends',
            'response_type' => 'code',
            'v' => '5.131'

        ];
    }

}