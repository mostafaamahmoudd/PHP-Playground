<?php

namespace Mustafa\Temp;

use Mustafa\Temp\Computer\CS;
use Mustafa\Temp\Computer\Keyboard;
use Mustafa\Temp\Computer\Monitor;
use Mustafa\Temp\Computer\Motherboard\Motherboard;
use Mustafa\Temp\Computer\Mouse;
use Mustafa\Temp\Computer\Types\PC;
use Mustafa\Temp\Computer\UPS;

abstract class Builder
{
    protected PC $pc;

    abstract protected function buildMotherboard(): Motherboard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildCS(): CS;
    abstract protected function buildUPS(): UPS;

    abstract public function getPC(): PC;
}