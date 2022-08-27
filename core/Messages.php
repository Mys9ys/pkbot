<?php

namespace Core;

class Messages
{
    use tAuth;

    private $methodUrl = 'https://api.vk.com/method/';
    private $sendMethod = 'messages.send?';
    private $historyMethod = 'messages.getHistory?';

    private $v = '5.101';

    public function send($sendId, $message){
        $param = [
//            'user_id' => 510815492,
            'user_id' => $sendId,
            'message' => $message,
            'v' => $this->v,
            'random_id' => time(),
            'access_token' => $this->token
        ];

        $request = file_get_contents($this->methodUrl.$this->sendMethod.http_build_query($param));
//
//        echo '<pre>';
//        var_dump($request);
//        echo '</pre>';
    }

    public function getHistory($podKolId){
        $param = [
            'user_id' => $podKolId,
            'peer_id' => $podKolId,
            'offset' => '0',
            'start_message_id' => -1,
            'v' => $this->v,
            'count' => '5',
            'access_token' => $this->token
        ];

        $request = file_get_contents($this->methodUrl.$this->historyMethod.http_build_query($param));

        if($request) $this->parseMessage($request);

//        echo '<pre>';
//        var_dump(json_decode($request, true));
//
//
//        echo '</pre>';
//
//        $ifp = fopen('json.json', "w");
//        $res = fwrite($ifp, $request);
//        fclose($ifp);

    }

    public function parseMessage($res){

    }
}