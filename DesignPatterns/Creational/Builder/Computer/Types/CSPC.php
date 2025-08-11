<?php

namespace Mustafa\Temp\Computer\Types;

use Mustafa\Temp\Computer\CS;
use Mustafa\Temp\Computer\Types\ICS;
use Mustafa\Temp\Computer\Types\PC;

class CSPC extends PC implements ICS
{
    private CS $cs;

    public function cooldown($temp): bool
    {
        return true;
    }

    public function getCs(): CS
    {
        return $this->cs;
    }

    public function setCs(CS $cs): void
    {
        $this->cs = $cs;
    }
}