<?php
namespace app\controllers;

use app\core\Controller;

class Home extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Trang chu',
            'page' => 'home',
            'css' => ['base', 'main','responsive']
        ]);
    }
}