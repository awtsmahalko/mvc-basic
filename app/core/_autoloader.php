<?php

$pre_class = "init/";
$init_classes = array(
    // 'Connection'    => $pre_class . 'connection.php',
    'Router'    => $pre_class . 'router.php',
);

$core_classes = array_merge($classes, $init_classes);
