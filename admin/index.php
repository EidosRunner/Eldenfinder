<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../core/http.php';
require __DIR__.'/../core/router.php';
require __DIR__.'/../core/html.php';
require __DIR__.'/../PDO.php';

// Protection admin
if (!isset($_SESSION['user_id']) || ($_SESSION['user_role'] ?? '') !== 'admin') {
    redirect('/user/login');
}

$base = __DIR__;

$uri = $_SERVER['REQUEST_URI'];
$uri = preg_replace('#^/admin#', '', $uri) ?: '/';
$segments = http_in($uri);
$route = route($segments);

// Si pas de route, on va vers admin/index
if (empty($route['entity']) || $route['entity'] === 'home') {
    $route['entity'] = 'admin';
    $route['action'] = 'index';
}

$body = run($route, $base, $pdo);
http_out(200, $body);