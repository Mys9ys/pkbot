<?php

namespace Core;

trait tAuth
{
    private $authToken = '';

    public function getToken(){
        return $this->authToken;
    }
}