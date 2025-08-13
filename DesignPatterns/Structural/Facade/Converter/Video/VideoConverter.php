<?php

namespace Mustafa\Temp\Converter\Video;

use Mustafa\Temp\Converter\Converter;

class VideoConverter implements Converter
{

    public function convert(string $fileName, string $from, string $to): void
    {
        echo "converting video file: $fileName from $from to $to ...\n";
    }
}