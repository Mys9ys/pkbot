<?php

namespace Core;

class Messages
{
    use tAuth;

    private $methodUrl = 'https://api.vk.com/method/';
    private $sendMethod = 'messages.send?';
    private $historyMethod = 'messages.getHistory?';

    private $v = '5.131';

    private $lastMessage = '';
    private $buttons = [];
    private $historyResponse = [];

    public function send($sendId, $message)
    {
        $param = [
//            'user_id' => 510815492,
            'user_id' => $sendId,
            'message' => $message,
            'v' => $this->v,
            'random_id' => time(),
            'access_token' => $this->token
        ];

        $request = file_get_contents($this->methodUrl . $this->sendMethod . http_build_query($param));

        $this->lastMessage++;
    }

    public function getHistory($podKolId = '-182985865')
    {
        $param = [
            'user_id' => $podKolId,
            'peer_id' => $podKolId,
//            'offset' => '0',
            'start_message_id' => $this->lastMessage ?: -1,
            'v' => $this->v,
            'count' => 10,
            'access_token' => $this->token
        ];

        $response = file_get_contents($this->methodUrl . $this->historyMethod . http_build_query($param));

//        if($request) $this->parseMessage($request);

        if($response){

            $this->historyResponse = json_decode($response, true)['response']['items'];

            echo '<pre>';
            var_dump($this->historyResponse);


            echo '</pre>';

            $ifp = fopen('json.json', "w");
            $res = fwrite($ifp, $response);
            fclose($ifp);

            $this->parseMessage();

        }

    }

    protected function parseMessage()
    {
        $arMessages = $this->historyResponse;

        $this->lastMessage = $arMessages[0]['id'];



    }

    protected function lastMessages($id)
    {
        $this->lastMessage = $id;
    }

    public function getStepInfo(){
        $this->getHistory();
    }
}