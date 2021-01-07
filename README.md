# puxt-log

A logger for puxt

## Install
```
composer requrie hostlink/puxt-log
```

## Setup 
puxt.config.php
```php 
"modules" => [
    "hostlink/puxt-log"
],

"log" => [
    "name" => "puxt",
    "handler" => [
        [
            "stream" => __DIR__ . "/log/" . date("Y-m-d") . ".log",
            "level" => Monolog\Logger::INFO
        ]
    ]
]
```

## Usage
```php
$context->log->info($message,$data);
```
