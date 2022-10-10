<?php
namespace app\controllers;

use app\core\Controller;

class About extends Controller {
    public function index(){
        $this->view("client", [
            'page' => 'about',
            'title' => 'Về chúng tôi',
            'css' => ['base', 'main','responsive',  'about']
            
        ]);
    }
}