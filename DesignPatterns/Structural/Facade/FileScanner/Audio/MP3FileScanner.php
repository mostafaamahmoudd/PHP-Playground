<?php

namespace Mustafa\Temp\FileScanner\Audio;

use Mustafa\Temp\FileScanner\FileScanner;

class MP3FileScanner extends FileScanner
{
    public function scan(): bool
    {
        return rand(0, 1);
    }
}