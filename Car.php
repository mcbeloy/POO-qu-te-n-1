
<?php

class Car
{// propriétés des voitures

    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

    private string $energy;

    private int $energyLevel;


    //méthodes

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbseats = $nbSeats;
        $this->energy = $energy;
    }
    //vitesse

    public function forward()
    {
        $this->currentSpeed = 50;

        return "Go !";
    }
 //freinage

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    // démarrage

    public function start(): int 
    {
        $this->currentSpeed = 10;
    }

    //nombre de roues
    public function getNbWheels(): int 
    {
        return $this->nbWheels;
    }
    //méthode pour la couleur

    public function getColor(): string
    {
        return $this->color;
    }   
    //méthode pour la vitesse

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    } 
    // méthode pour le type d'énergie

    public function getEnergy(): string 
    {
        return $this->energy;
    }
    // méthode pour le niveau d'énergie

    public function getEnergyLevel(): string 
    {
        return $this->energyLevel;
    }
}

