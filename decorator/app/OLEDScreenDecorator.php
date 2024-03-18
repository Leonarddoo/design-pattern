<?php

namespace App;

class OLEDScreenDecorator implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with an OLED screen";
    }
}