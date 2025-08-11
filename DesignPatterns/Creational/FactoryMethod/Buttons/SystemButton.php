<?php

namespace src\Buttons;

class SystemButton implements Button
{
    public function show(): string
    {
        return 'System';
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}