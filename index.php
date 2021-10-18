 <?php

require_once 'Bicycle.php';
$bicycle = new Bicycle ('black', 15);
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
$car = new Car('yellow', 5, 'electric', 50);
var_dump($car);
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

require_once 'Truck.php';
$truck = new Truck('black', 3, 'full', '0');
echo $truck->forward();
var_dump($truck);

// Moving bicycle
echo $bicycle->forward();
echo '<br> Vitesse du vélo: ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $bicycle->brake();
echo '<br> Freinage du vélo:  <br>' . PHP_EOL;
echo $bicycle->brake();

 //Rockrider

$rockrider = new Bicycle ('red', 10);

echo $rockrider->forward();
echo '<br> Vitesse du vélo: ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $rockrider->brake();
echo '<br> Freinage du vélo: ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $rockrider->brake();

//Tornado

$tornado = new Bicycle ('green', 8);

echo $tornado->forward();
echo '<br> Vitesse du vélo: ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $tornado->brake();
echo '<br> Freinage du vélo:' . $rockrider->getCurrentSpeed() .  ' km/h' . '<br>' . PHP_EOL;
echo $tornado->brake();

// Moving car

echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake();
echo '<br> Freinage de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake();

//Moving camion

echo $truck->forward();
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $truck->brake();
echo '<br> Freinage du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $truck->brake();