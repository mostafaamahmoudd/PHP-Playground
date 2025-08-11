<?php

namespace Mustafa\Temp\Computer;

class Keyboard
{
    private bool $utfSupport;

    /**
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }
}