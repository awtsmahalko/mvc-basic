<?php

$pre_class = "init/";
$init_classes = array(
    'Controller'    => $pre_class . 'controller.php',
    'Router'        => $pre_class . 'router.php',
);

$core_classes = array_merge($classes, $init_classes);
