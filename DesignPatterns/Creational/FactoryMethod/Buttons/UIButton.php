<?php

namespace src\Buttons;

class UIButton implements Button
{
    public function show(): string
    {
        return '<UIButton props="{UI Button}"></UIButton>';
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}