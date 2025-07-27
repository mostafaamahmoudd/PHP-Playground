<?php

class Microwave
{
    private $temp;
    private $program;
    private $time;
    private $status;

    /**
     * @param $temp
     * @param $program
     * @param $time
     */
    public function __construct($temp, $program, $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function defreeze()
    {
        echo $this->turnOnMicrowaveSystem();
        echo $this->loading();
        echo $this->setTime();

        return "I am defreezing the food at {$this->temp} using the program {$this->program}";
    }

    private function loading()
    {
        return "Loading program {$this->program}...\n";
    }

    private function turnOnMicrowaveSystem()
    {
        return "Starting Microwave System...\n";
    }

    private function turnOn()
    {
        $this->status = true;
        return true;
    }

    private function turnOff()
    {
        $this->status = false;
        return false;
    }

    private function setTime()
    {
        return "Setting time to {$this->time}\n";
    }
}