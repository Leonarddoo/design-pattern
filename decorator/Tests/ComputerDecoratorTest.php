<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Laptop;
use App\GPUDecorator;
use App\OLEDScreenDecorator;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);

        $this->assertSame(600, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer with a GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreenDecorator($laptop);

        $this->assertSame(700, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer with an OLED screen", $laptopWithOLEDScreen->getDescription());
    }
}