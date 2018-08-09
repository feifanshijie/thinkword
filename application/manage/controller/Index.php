<?php

namespace app\manage\controller;

use app\manage\Controller;

class Index extends Controller
{
    public function index()
    {
        $data['name'] = 'ThinkPHP';
        $data['email'] = 'thinkphp@qq.com';
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function hello($name = null) : string
    {
        return 'hello,' . $name;
    }
}
