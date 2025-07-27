<?php

require_once 'Microwave.php';

$microwave = new Microwave(100, "DE1", 30);
var_dump($microwave->defreeze());