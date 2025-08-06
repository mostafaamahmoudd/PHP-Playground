<?php

namespace src\Dialogs;

use src\Buttons\Button;
use src\Buttons\UIButton;

class MobileDialog extends Dialog
{
    public function createButton(): Button
    {
        return new UIButton();
    }
}