 <?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

// bicycle

$bicycle = new Bicycle ('black', 15);
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();

//car 

$car = new Car('yellow', 5, 'electric', 50);
var_dump($car);
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump(Car::ALLOWED_ENERGIES);

//truck

$truck = new Truck('black', 3, 'fuel', 90);
echo $truck->forward();
var_dump(Truck::ALLOWED_ENERGIES);
echo $truck->isFull();

// Moving bicycle

echo $bicycle->forward();
echo '<br> Vitesse du vélo: ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $bicycle->brake();
echo '<br> Freinage du vélo:  <br>' . PHP_EOL;
echo $bicycle->brake();

// Moving car

echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake();
echo '<br> Freinage de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake();

//Moving truck

echo $truck->forward();
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $truck->brake();
echo '<br> Freinage du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $truck->brake();