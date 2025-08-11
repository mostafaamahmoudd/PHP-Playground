<?php

namespace Mustafa\Temp\Computer;

class Monitor
{
    private string $resolution;

    /**
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    public function getResolution(): string
    {
        return $this->resolution;
    }
}