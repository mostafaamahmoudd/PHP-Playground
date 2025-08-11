<?php

use src\Dialogs\SystemDialog;

require_once __DIR__ . "/../vendor/autoload.php";

$sysDialog = new SystemDialog();

var_dump($sysDialog->render());