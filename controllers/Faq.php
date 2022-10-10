<?php
namespace app\controllers;

use app\core\Controller;

class Faq extends Controller {
    public function index(){
        $this->view("client", [
            'title' => 'Câu hỏi thường gặp',
            'page' => 'faq',
            'css' => ['base', 'main','responsive',  'faq']
        ]);
    }
}