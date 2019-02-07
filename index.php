<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/autoload.php');
$router = new Router();
$router->run();