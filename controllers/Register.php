<?php
namespace app\controllers;

use app\core\Controller;

class Register extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Đăng ký',
            'page' => 'register',
            'css' => ['base', 'main','responsive', 'account']
        ]);
    }
}