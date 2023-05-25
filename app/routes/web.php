<?php
$request = $_SERVER['REQUEST_URI'];
$page = str_replace("/mvc-basic/", "", $request);

$router = new Router;
$router->dispatch($page);
