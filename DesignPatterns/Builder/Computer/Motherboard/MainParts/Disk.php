<?php

namespace Mustafa\Temp\Computer\Motherboard\MainParts;

class Disk
{
    private string $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}