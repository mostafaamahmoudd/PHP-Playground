<?php

namespace Mustafa\Temp\Computer\Types;

use Mustafa\Temp\Computer\Keyboard;
use Mustafa\Temp\Computer\Monitor;
use Mustafa\Temp\Computer\Motherboard\Motherboard;
use Mustafa\Temp\Computer\Mouse;

class PC
{
    private Motherboard $motherboard;
    private Keyboard $keyboard;
    private Mouse $mouse;
    private Monitor $monitor;

    public function turnOn(): string
    {
        return "turning on...";
    }

    public function turnOff(): string
    {
        return "turning off...";
    }

    public function setMotherboard(Motherboard $motherboard): void
    {
        $this->motherboard = $motherboard;
    }

    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function dashboard(): array
    {
        return [
            'motherboard' => $this->motherboard,
            'keyboard' => $this->keyboard,
            'monitor' => $this->monitor,
            'mouse' => $this->mouse,
        ];
    }
}