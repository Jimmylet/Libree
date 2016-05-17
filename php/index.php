<?php
/**
 * index.php
 * Créé par : Jimmy Letecheur
 * Date : 17/05/16
 */

/*
 * TODO// Ne pas oublier d'inclure ces deux lignes quand c'est nécessaire
 *
 * require('vendor/autoload.php');
 * require('routes.php');
 *
 */

require('routes.php');

session_start();

$defaultRoute = $routes['default'];
$routeParts = explode('_', $defaultRoute);

$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : $routeParts[0];
$e = isset($_REQUEST['e']) ? $_REQUEST['e'] : $routeParts[1];

if (!in_array($a . '_' . $e, $routes)) {
    die('Ce que vous cherchez n’est pas ici');
}

/*$controller_name = 'Controllers\\' . ucfirst($e) . 'Controller';
$container = new \Illuminate\Container\Container();
$controller = $container->make($controller_name);

$data = call_user_func([$controller, $a]);*/

include('views/homepage.php');
