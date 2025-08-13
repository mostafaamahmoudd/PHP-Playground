<?php

namespace Mustafa\Temp\Normalizer;

interface Normalizer
{
    public function normalize(string $fileName): void;
}