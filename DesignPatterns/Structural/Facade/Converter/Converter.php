<?php

namespace Mustafa\Temp\Converter;

interface Converter
{
    public function convert(string $fileName, string $from, string $to): void;
}