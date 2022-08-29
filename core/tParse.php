<?php

namespace Core;

trait tParse
{
    private $url = '/src/file/parse.json';
    private $parseArray = [];

    protected function __construct(){

        $info = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $this->url);

        $this->parseArray = json_decode($info, true);

    }

}