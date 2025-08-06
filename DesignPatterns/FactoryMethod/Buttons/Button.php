<?php

namespace src\Buttons;

interface Button
{
    public function show(): string;
    public function click(): void;
}