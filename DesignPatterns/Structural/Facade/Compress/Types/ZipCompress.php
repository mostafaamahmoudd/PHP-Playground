<?php

namespace Mustafa\Temp\Compress\Types;

use Mustafa\Temp\Compress\Compress;

class ZipCompress implements Compress
{

    public function compress($fileName): void
    {
        echo "compressing $fileName using zip algo...\n";
    }
}