<?php

namespace Mustafa\Temp\Computer\Motherboard\MainParts;

class CPU
{
    private float $speed;

    /**
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}