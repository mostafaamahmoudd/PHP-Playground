<?php

namespace Mustafa\Temp\FileScanner\Video;

use Mustafa\Temp\FileScanner\FileScanner;

class MP4FileScanner extends FileScanner
{
    public function scan(): bool
    {
        return rand(0,1);
    }
}