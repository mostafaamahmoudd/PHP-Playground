<?php

namespace Mustafa\Temp\Converter\Audio;

use Mustafa\Temp\Converter\Converter;

class AudioConverter implements Converter
{

    public function convert(string $fileName, string $from, string $to): void
    {
        echo "converting audio file: $fileName from $from to $to ...\n";
    }
}