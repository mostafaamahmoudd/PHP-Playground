<?php

use Mustafa\Temp\CorruptedFileException;
use Mustafa\Temp\FileConverterFacade;

require_once __DIR__ . "/../vendor/autoload.php";

try {
    $converter = new FileConverterFacade('videFile.mp4');
    $converter->convert();
} catch (CorruptedFileException $e) {
    echo $e->getMessage();
}