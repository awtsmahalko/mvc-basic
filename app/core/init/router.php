<?php

/**
 * This is for router uri
 */
class Router
{
  public $route;

  public function dispatch($path)
  {
    $path = $path != '' ? $path : 'home';
    switch ($path) {
      case 'home':
        $route = ['folder' => 'home', 'file' => 'index.php'];
        break;
      case 'user':
        $route = ['folder' => 'user', 'file' => 'index.php'];
        break;
      default:
        $route = ['folder' => '404', 'file' => 'index.php'];
        break;
    }
    $route['views_file'] = $route['folder'] . "/" . $route['file'];
    return $this->route = $route;
  }

  public static function uri($uri = '')
  {
    return ROOT_FOLDER . $uri;
  }
}
