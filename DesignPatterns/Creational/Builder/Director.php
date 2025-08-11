<?php

namespace Mustafa\Temp;

use Mustafa\Temp\Computer\Types\PC;

class Director
{
    private Builder $builder;

    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makePC(): PC
    {
        return $this->builder->getPC();
    }
}