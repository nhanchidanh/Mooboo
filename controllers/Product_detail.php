<?php
namespace app\controllers;

use app\core\Controller;

class Product_detail extends Controller {
    public function index(){
        $this->view("client", [
            'page' => 'product_detail',
            'title' => 'Về chúng tôi',
            'css' => ['base', 'main','responsive',  'product_detail']
            
        ]);
    }
}