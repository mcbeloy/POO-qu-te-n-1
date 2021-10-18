<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

// Truck.php

    protected int $load = 0;

    protected int $storageCapacity;

    public function __construct(string $color, int $nbSeats, string $energy, $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;

    }

    public function getStorageCapacity():int
    {
        return $this->storageCapacity;

    }

    public function setStorageCapacity(int $storageCapacity): void 
       {
        $this->storageCapacity = $storageCapacity;
       } 
    
   public function getLoad(): int 
   {
     return $this->load;
   }
   public function setLoad(int $load): void 
    {
        $this->load = $load;
    }

    public function isFull(): string
    {
        if ($this->load < $this->storageCapacity) {
            return "in filling";
        } elseif ($load === $storageCapacity) {
            return "full";
        } else {
            return "ERROR";
        }
       echo $truck->isFull();
    }
}
