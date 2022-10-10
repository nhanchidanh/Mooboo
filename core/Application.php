<?php
namespace app\core;

class Application {
    private $controller = "Home";
    private $action = "index";
    private $param = [];

    public function __construct() {
        $array_path = $this->processUrl();
        // print_r($array_path);
        if(isset($array_path[0]) && file_exists(CONTROLLER_PATH . $array_path[0] . ".php")) {
            $this->controller = $array_path[0];
        }else {
            exit ("NOT FOUND CONTROLLER!");
        }
        $this->controller = "\\app\\controllers\\$this->controller";
        $this->controller = new $this->controller;

        if(isset($array_path[1]) && method_exists($this->controller, $array_path[1])) {
            $this->action = $array_path[1];
        }

        unset($array_path[0], $array_path[1]);
        $this->param = $array_path ?? [];

        call_user_func_array([$this->controller, $this->action], $this->param);
    }

    public function processUrl() {
        if(isset($_GET['url'])) {
            return explode("/",filter_var(trim($_GET['url'],"/")));
        }
        return [0 => "Home"];
    }
}