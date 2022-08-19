<?php

namespace Core;

trait tAuth
{
    private $authToken = '1';

    public function getToken(){
        return $this->authToken;
    }
}