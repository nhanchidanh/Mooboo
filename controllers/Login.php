<?php
namespace app\controllers;

use app\core\Controller;

class Login extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Đăng nhập',
            'page' => 'login',
            'css' => ['base', 'main','responsive', 'account']
        ]);
    }
}