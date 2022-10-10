<?php
namespace app\controllers;

use app\core\Controller;

class Contact extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Liên hệ',
            'page' => 'contact',
            'css' => ['base', 'main','responsive',  'contact']
        ]);
    }
}