<?php

namespace Mustafa\Temp\Builders;

use Mustafa\Temp\Builder;
use Mustafa\Temp\Builders\PCBuilder;
use Mustafa\Temp\Computer\CS;
use Mustafa\Temp\Computer\Keyboard;
use Mustafa\Temp\Computer\Monitor;
use Mustafa\Temp\Computer\Motherboard\MainParts\CPU;
use Mustafa\Temp\Computer\Motherboard\MainParts\Disk;
use Mustafa\Temp\Computer\Motherboard\MainParts\GPU;
use Mustafa\Temp\Computer\Motherboard\MainParts\NCI;
use Mustafa\Temp\Computer\Motherboard\MainParts\RAM;
use Mustafa\Temp\Computer\Motherboard\MainParts\Sockets;
use Mustafa\Temp\Computer\Motherboard\Motherboard;
use Mustafa\Temp\Computer\Motherboard\Sockets\CType;
use Mustafa\Temp\Computer\Motherboard\Sockets\USB;
use Mustafa\Temp\Computer\Mouse;
use Mustafa\Temp\Computer\Types\CSPC;
use Mustafa\Temp\Computer\Types\PC;
use Mustafa\Temp\Computer\UPS;

class CSPCBuilder extends Builder
{
    protected function buildMotherboard(): Motherboard
    {
        $cpu = new Cpu(2.8);
        $gpu = new Gpu(6);
        $ram = new Ram(16);
        $nci = new NCI(5);
        $disk = new Disk('ssd');
        $socket = new Sockets([
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true),
        ]);

        return new Motherboard($cpu, $gpu, $ram, $disk, $nci, $socket);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1980');
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(true);
    }

    protected function buildCS(): CS
    {
        return new CS(50.20);
    }

    protected function buildUPS(): UPS
    {
        // TODO: Implement buildUPS() method.
    }

    public function getPC(): PC
    {
        $pc = new CSPC();
        $pc->setKeyboard($this->buildKeyboard());
        $pc->setMonitor($this->buildMonitor());
        $pc->setMouse($this->buildMouse());
        $pc->setMotherboard($this->buildMotherboard());
        $pc->setCS($this->buildCS());

        return $pc;
    }
}