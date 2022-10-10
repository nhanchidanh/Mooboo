<?php

namespace app\core;

class Controller
{
    public function model($model)
    {
        if (file_exists(MODEL_PATH . $model . ".php")) {
            $model = "\\app\\models\\$model";
            return new $model;
        }
        exit("MODEL NOT FOOUND");
    }

    public function view($view, $params = [])
    {
        if (!isset($params['title']) || !isset($params['page']) || !isset($params['css'])) {
            if (!is_array($params['css']))
                exit("css is array.");
            exit("Missing: title or page or css");
        }

        if (file_exists(VIEW_PATH . $view . ".php")) {
            return require_once VIEW_PATH . $view . ".php";
        }
        exit("VIEW NOT FOUND");
    }

    public function getLayout($nameLayout, $params = [])
    {
        if (file_exists(VIEW_LAYOUTS_PATH . $nameLayout . '.php')) {
            return require_once VIEW_LAYOUTS_PATH . $nameLayout . '.php';
        }

        exit("GET LAYOUT NOT FOUND!");
    }

    public function getPage($namePage, $params = [])
    {
        if (file_exists(VIEW_PAGES_PATH . $namePage . '.php')) {
            return require_once VIEW_PAGES_PATH . $namePage . '.php';
        }

        exit("GET PAGE NOT FOUND!");
    }

    public function getCss($nameCss)
    {
        return PUBLIC_CSS_PATH . $nameCss . '.css';
    }

    public function getJs($nameJs)
    {
        return PUBLIC_JS_PATH . $nameJs . '.Js';
    }
}
