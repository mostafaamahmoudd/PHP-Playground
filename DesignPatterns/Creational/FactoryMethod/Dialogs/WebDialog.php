<?php

namespace src\Dialogs;

use src\Buttons\Button;
use src\Buttons\WebButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WebButton();
    }
}