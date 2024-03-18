<?php
require('../vendor/autoload.php');

use App\Factory\VehicleFactory;

$car = VehicleFactory::create('Car', 0.5, 'Gasoline');
$bicycle = VehicleFactory::create('Bicycle', 0, 'Humain');
$truck = VehicleFactory::create('Truck', 1, 'Diesel');

echo "\n Voici les caractéristiques de chaque véhicule : \n\n";
echo "La voiture coûte " . $car->getCostPerKm() . "€ par kilomètre et fonctionne au " . $car->getFuelType() . ".\n";
echo "Le vélo coûte " . $bicycle->getCostPerKm() . "€ par kilomètre et utilisé par un " . $bicycle->getFuelType() . ".\n";
echo "Le camion coûte " . $truck->getCostPerKm() . "€ par kilomètre et fonctionne au " . $truck->getFuelType() . ".\n\n";

echo "En fonction de la distance et du poids, voici le véhicule qui vous convient : \n\n";
$vehicle = VehicleFactory::chooseVehicle(10, 15);
echo "Pour une distance de 10 km et un poids de 15 kg, le véhicule qui vous convient est un vélo utilisé par un " . $vehicle->getFuelType() . ".\n";
$vehicle = VehicleFactory::chooseVehicle(50, 150);
echo "Pour une distance de 50 km et un poids de 150 kg, le véhicule qui vous convient est une voiture qui fonctionne au " . $vehicle->getFuelType() . ".\n";
$vehicle = VehicleFactory::chooseVehicle(100, 500);
echo "Pour une distance de 100 km et un poids de 500 kg, le véhicule qui vous convient est un camion qui fonctionne au " . $vehicle->getFuelType() . ".\n";
