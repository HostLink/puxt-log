<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return function ($context, $inject) {
    $config = $context->config["log"];
    $log = new Logger($config["name"]);
    foreach ($config["handler"] as $handler) {
        $log->pushHandler(new StreamHandler($handler["stream"], $handler["level"] ?? Logger::DEBUG));
    }
    $inject("log", $log);
};
