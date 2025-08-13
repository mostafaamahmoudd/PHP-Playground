<?php

namespace Mustafa\Temp\Normalizer\Audio;

use Mustafa\Temp\Normalizer\Normalizer;

class AudioNormalizer implements Normalizer
{

    public function normalize(string $fileName): void
    {
        echo "I'm normalizing audio file: {$fileName}...\n";
    }
}