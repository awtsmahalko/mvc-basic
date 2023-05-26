<?php
$request = $_SERVER['REQUEST_URI'];
$page = str_replace(ROOT_FOLDER, "", $request);

$router = new Router;
$router->dispatch($page);
