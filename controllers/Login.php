<?php
namespace app\controllers;

use app\core\Controller;
use app\models\UserModel;

class Login extends Controller {
    public function index(){
        $user = new UserModel();

        if($this->isPost()) {
            $user->loadData($this->getBody());
            $user->validate();
        }

        $this->view("client", [
            'title' => 'Đăng nhập',
            'page' => 'login',
            'model' => $user,
            'css' => ['base', 'main','responsive', 'account']
        ]);
    }
}