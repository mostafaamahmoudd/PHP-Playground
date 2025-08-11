<?php

namespace src\Dialogs;

use src\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function render(): string
    {
        $button = $this->createButton();

        return "
            ###################################################
            {$button->show()}
            ###################################################
        ";
    }
}