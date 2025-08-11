<?php

namespace Mustafa\Temp\Computer\Motherboard\MainParts;

class RAM
{
    private int $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}