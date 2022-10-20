<?php
namespace app\controllers;

use app\core\Controller;
use app\models\UserModel;

class Register extends Controller {
    public function index(){
        // $authModel = $this->model("AuthModel");
        $user = new UserModel();

        // if($this->isPost()) {
        //     $data = $this->getBody();
        //     print_r($authModel->validate($data));
            
        //     exit;
        // }

        if($this->isPost()) {
            $user->loadData($this->getBody());
            $user->validate();
        }

        $this->view("client", [
            'title' => 'Đăng ký',
            'page' => 'register',
            'model' => $user,
            'css' => ['base', 'main','responsive', 'account']
        ]);
    }
}