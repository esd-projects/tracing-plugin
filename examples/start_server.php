<?php


use ESD\Plugins\Tracing\Examples\Application;

require __DIR__ . '/../vendor/autoload.php';
define("ROOT_DIR", __DIR__ . "/..");
define("RES_DIR", __DIR__ . "/resources");

Application::main();