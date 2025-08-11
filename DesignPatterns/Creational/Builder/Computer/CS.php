<?php

namespace Mustafa\Temp\Computer;

class CS
{
    private float $temp;

    /**
     * @param float $temp
     */
    public function __construct(float $temp)
    {
        $this->temp = $temp;
    }

    public function getTemp(): float
    {
        return $this->temp;
    }
}