<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Vehicle;
use InvalidArgumentException;

class VehicleFactory
{
    public static function make(string $type, $costPerKm, $fuelType): Vehicle
    {
        return match ($type) {
            'Scooter' => new Car($costPerKm, $fuelType),
            'Bike' => new Bicycle($costPerKm, $fuelType),
            'Van' => new Truck($costPerKm, $fuelType),
            default => throw new InvalidArgumentException("Invalid transport type"),
        };
    }

    public static function selectTransport($distance, $weight): Vehicle
    {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0, 'Human');
        } elseif ($weight < 200) {
            return new Car(0.5, 'Petrol');
        } else {
            return new Truck(1, 'Diesel');
        }
    }
}
