<?php

$path = array(__DIR__, '..', 'vendor', 'autoload.php');

$loader = require implode(DIRECTORY_SEPARATOR, $path);

$loader->add('ProjectName\Test', __DIR__);
