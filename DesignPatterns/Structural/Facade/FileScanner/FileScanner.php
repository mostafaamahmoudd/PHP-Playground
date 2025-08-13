<?php

namespace Mustafa\Temp\FileScanner;

abstract class FileScanner
{
    protected string $fileName;

    /**
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    abstract public function scan(): bool;
}