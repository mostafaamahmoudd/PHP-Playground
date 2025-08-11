<?php

namespace src\Buttons;

class WebButton implements Button
{
    public function show(): string
    {
        return '<div><button>Web Button</button></div>';
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}