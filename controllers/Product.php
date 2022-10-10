<?php
namespace app\controllers;

use app\core\Controller;

class Product extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Sản phẩm',
            'page' => 'product',
            'css' => ['base', 'main','responsive', 'product']
        ]);
    }
}