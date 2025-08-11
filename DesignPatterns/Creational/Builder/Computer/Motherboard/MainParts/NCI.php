<?php

namespace Mustafa\Temp\Computer\Motherboard\MainParts;

class NCI
{
    private int $category;

    /**
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    public function getCategory(): int
    {
        return $this->category;
    }
}