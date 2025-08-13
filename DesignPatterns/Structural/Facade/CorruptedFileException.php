<?php

namespace Mustafa\Temp;

use Exception;

class CorruptedFileException extends Exception
{

    public function __construct()
    {
        parent::__construct('This file is corrupted.\n');
    }
}