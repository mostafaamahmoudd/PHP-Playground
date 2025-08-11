<?php

namespace Mustafa\Temp\Computer;

class Mouse
{
    private bool $withExtras;

    /**
     * @param bool $withExtras
     */
    public function __construct(bool $withExtras)
    {
        $this->withExtras = $withExtras;
    }

    public function isWithExtras(): bool
    {
        return $this->withExtras;
    }
}