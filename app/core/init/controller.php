<?php

/**
 * This is for controller used in ajax
 */
class Controller
{
  public function dispatch($uri)
  {
    switch ($uri) {
      case 'add-user':
        $class_name = 'Users';
        $method_name = 'add';
        break;
      case 'get-users':
        $class_name = 'Users';
        $method_name = 'show';
        break;
      case 'db-runner':
        $class_name = 'Schema';
        $method_name = 'runner';
        break;
      default:
        return "Invalid URI";
    }

    $controller = new $class_name();
    return json_encode($controller->$method_name());
  }
}
