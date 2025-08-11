<?php

namespace Mustafa\Temp\Computer\Motherboard\Sockets;

class CType
{
    private bool $withVideoTransfer;

    /**
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }
}