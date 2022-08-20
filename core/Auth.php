<?php

namespace Core;

class Auth
{
    use tAuth;

    public function getAuthToken()
    {
        return $this->authToken;
    }
}