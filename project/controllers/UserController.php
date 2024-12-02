<?php

namespace Project\Controllers;

use Core\Controller;

class UserController extends Controller
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

  public function show($params)
  {
    var_dump($this->users[$params['id']]);
  }

  public function info($params)
  {
    echo $this->users[$params['id']][$params['key']];
  }

  public function all()
  {
    foreach ($this->users as $key => $value) {
      echo "id: {$key}<br>Имя: {$value['name']}<br>Возраст: {$value['age']}<br>{$value['salary']}<br><hr>";
    }
  }

  public function first($param)
  {
    $n = $param['n'];
    echo "<pre>";
    var_dump(array_slice($this->users, 0, $n));
  }
}
