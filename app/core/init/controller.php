<?php

/**
 * This is for controller used in ajax
 */
class Controller
{
  public function dispatch($uri)
  {
    switch ($uri) {
      case 'get-users':
        $class_name = 'Users';
        $method_name = 'get_users';
        break;
      default:
        return "Invalid URI";
    }

    $controller = new $class_name();
    return json_encode($controller->$method_name());
  }
}
