<?php

$app = new swoole_http_server("0.0.0.0", 8099);

$app->on('start', function ($server) {
    echo "Executing in the port 8099";
});

$app->on('request', function ($req, $res) {
    $res->header('Content-type', 'text/html');
    $res->end('Hola');
});

$app->start();