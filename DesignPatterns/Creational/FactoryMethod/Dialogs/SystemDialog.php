<?php

namespace src\Dialogs;

use src\Buttons\Button;
use src\Buttons\SystemButton;

class SystemDialog extends Dialog
{
    public function createButton(): Button
    {
        return new SystemButton();
    }
}