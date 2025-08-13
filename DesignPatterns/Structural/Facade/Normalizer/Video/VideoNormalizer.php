<?php

namespace Mustafa\Temp\Normalizer\Video;

use Mustafa\Temp\Normalizer\Normalizer;

class VideoNormalizer implements Normalizer
{

    public function normalize(string $fileName): void
    {
        echo "I'm normalizing video file: {$fileName}...\n";
    }
}