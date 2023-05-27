<?php

$pre_class = "init/";
$init_classes = array(
    'Connection'    => $pre_class . 'connection.php',
    'Controller'    => $pre_class . 'controller.php',
    'Router'        => $pre_class . 'router.php',
    'Schema'        => $pre_class . 'schema.php',
);

$core_classes = array_merge($classes, $init_classes);
