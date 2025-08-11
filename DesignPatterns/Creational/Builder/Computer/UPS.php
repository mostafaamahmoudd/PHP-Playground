<?php

namespace Mustafa\Temp\Computer;

class UPS
{
    private int $duration;

    /**
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}