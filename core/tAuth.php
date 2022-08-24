<?php

namespace Core;

trait tAuth
{
    private $oauth = 'https://api.vk.com/oauth/token?';
    private $clientId = '2274003';
    private $clientSecret = 'hHbZxrka2uZ6jB1inYsH';
    protected $token = '';

    private $params = [];

    public function __construct($userName = '', $userPassword = '')
    {

        $this->params = [
            'grant_type' => 'password',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];

        if ($_COOKIE['bot_token']) {
            $this->token = $_COOKIE['bot_token'];
        } else {
            if ($userName && $userPassword) {

                $this->params['username'] = $userName;
                $this->params['password'] = $userPassword;

                $this->setToken();
            }
        }
    }

    protected function setToken()
    {

        $request = file_get_contents($this->oauth . http_build_query($this->params));

        if ($request) {

            $request = json_decode($request, true);

            $this->token = $request['access_token'] ?: '';

            setcookie("bot_token", $this->token, time()+60*60*24*1, '/');

        }

    }

}