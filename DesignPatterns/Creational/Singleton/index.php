<?php

use Mustafa\Temp\AppSettings;

require_once __DIR__ . "/../vendor/autoload.php";

$settings = AppSettings::getInstance();
var_dump($settings::getConfig('Database'));
