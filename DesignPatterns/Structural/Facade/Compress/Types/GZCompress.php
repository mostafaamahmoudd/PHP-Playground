<?php

namespace Mustafa\Temp\Compress\Types;

use Mustafa\Temp\Compress\Compress;

class GZCompress implements Compress
{

    public function compress($fileName): void
    {
        echo "compressing $fileName using GZ algo...\n";
    }
}