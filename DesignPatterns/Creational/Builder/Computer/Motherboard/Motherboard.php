<?php

namespace Mustafa\Temp\Computer\Motherboard;

use Mustafa\Temp\Computer\Motherboard\MainParts\CPU;
use Mustafa\Temp\Computer\Motherboard\MainParts\Disk;
use Mustafa\Temp\Computer\Motherboard\MainParts\GPU;
use Mustafa\Temp\Computer\Motherboard\MainParts\NCI;
use Mustafa\Temp\Computer\Motherboard\MainParts\RAM;
use Mustafa\Temp\Computer\Motherboard\MainParts\Sockets;

class Motherboard
{
    private CPU $cpu;
    private GPU $gpu;
    private RAM $ram;
    private Disk $disk;
    private NCI $nci;
    private Sockets $sockets;

    /**
     * @param CPU $cpu
     * @param GPU $gpu
     * @param RAM $ram
     * @param Disk $disk
     * @param NCI $nci
     * @param Sockets $sockets
     */
    public function __construct(CPU $cpu, GPU $gpu, RAM $ram, Disk $disk, NCI $nci, Sockets $sockets)
    {
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->ram = $ram;
        $this->disk = $disk;
        $this->nci = $nci;
        $this->sockets = $sockets;
    }

    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }

    public function getNci(): NCI
    {
        return $this->nci;
    }

    public function getSockets(): Sockets
    {
        return $this->sockets;
    }
}