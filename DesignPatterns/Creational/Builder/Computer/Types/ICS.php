<?php

namespace Mustafa\Temp\Computer\Types;

interface ICS
{
    public function cooldown($temp): bool;
}