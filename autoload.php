<?php
require_once "./config.php";
require_once "./vendor/Psr4AutoloaderClass.php";

$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace("app",".");