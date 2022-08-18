<?php

namespace Project\Controllers;

class UserController
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name' => 'user1', 'age' => '23', 'salary' => 1000],
            2 => ['name' => 'user2', 'age' => '24', 'salary' => 2000],
            3 => ['name' => 'user3', 'age' => '25', 'salary' => 3000],
            4 => ['name' => 'user4', 'age' => '26', 'salary' => 4000],
            5 => ['name' => 'user5', 'age' => '27', 'salary' => 5000],
        ];
    }

    public function all()
    {
        echo json_encode($this->users); // выводим страницу по номеру
    }

    public function first($params)
    {
        echo json_encode(array_slice($this->users, 0 , $params['n'])); // выводим страницу по номеру
    }

    public function info($params)
    {
        echo json_encode($this->users[$params['id']][$params['key']]); // выводим страницу по номеру
    }

    public function show($params)
    {
        echo json_encode($this->users[$params['id']]); // выводим страницу по номеру
    }


}