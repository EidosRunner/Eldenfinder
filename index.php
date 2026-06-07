<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'core/http.php';
require 'core/router.php';
require 'core/html.php';
require 'PDO.php';

$base = __DIR__.'/app';

$segments = http_in($_SERVER['REQUEST_URI']);
$route = route($segments);

$main = run($route, $base, $pdo);
$body = render('app/views/_layout.php', ['page_content' => $main]);

http_out(200, $body);

// var_dump($segments);
// var_dump($route);
// var_dump($body);  
