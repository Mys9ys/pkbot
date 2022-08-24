<?php

namespace Core;

class Messages
{
    use tAuth;

    private $methodUrl = 'https://api.vk.com/method/';
    private $sendMethod = 'messages.send?';

    private $v = '5.101';

    private $param = [];

    public function send($sendId, $message){
        $this->param = [
//            'user_id' => 510815492,
            'user_id' => $sendId,
            'message' => $message,
            'v' => $this->v,
            'random_id' => time(),
            'access_token' => $this->token
        ];

        $request = file_get_contents($this->methodUrl.$this->sendMethod.http_build_query($this->param));

        echo '<pre>';
        var_dump($request);
        echo '</pre>';
    }


}