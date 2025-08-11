<?php

use Mustafa\Temp\Builders\CSPCBuilder;
use Mustafa\Temp\Builders\PCBuilder;
use Mustafa\Temp\Director;

require_once __DIR__ . "/../vendor/autoload.php";

$director = new Director(new PCBuilder());
$pc = $director->makePC();
var_dump($pc);

$director->changeBuilder(new CSPCBuilder());
$pc = $director->makePC();
var_dump($pc);