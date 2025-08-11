<?php

namespace Mustafa\Temp\Computer\Types;

use Mustafa\Temp\Computer\CS;
use Mustafa\Temp\Computer\Types\ICS;
use Mustafa\Temp\Computer\Types\IPower;
use Mustafa\Temp\Computer\Types\PC;
use Mustafa\Temp\Computer\UPS;

class XLPC extends PC implements ICS, IPower
{
    private CS $cs;
    private UPS $ups;

    public function cooldown($temp): bool
    {
        return true;
    }

    public function backupPower(): bool
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

    public function getUps(): UPS
    {
        return $this->ups;
    }

    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }
}