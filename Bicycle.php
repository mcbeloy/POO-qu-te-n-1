<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;


    //méthodes

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbseats = $nbSeats;
        
    }
    //vitesse

    public function forward()
    {
        $this->currentSpeed = 15;

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

}