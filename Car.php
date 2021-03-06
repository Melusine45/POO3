<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    // Do not modify the rest of the file
    /**
     * @var string
     */
    protected $energy;
    /**
     * @var int
     */
    private $energyLevel;
    /**
     * @var bool
     */
    private $parkBrake;
    /**
     * @var bool
     */
    private $light;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);

    }

    public function start(): string
    {
        if ($this->parkBrake === True){
            throw new Exception(("Released the Brake!". $this->setParkBrake(false)));

        }
        return parent::start(); // TODO: Change the autogenerated stub
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return bool
     */
    public function isParkBrake(): bool
    {
        return $this->parkBrake;
    }

    /**
     * @param bool $parkBrake
     */
    public function setParkBrake(bool $parkBrake): void
    {
        $this->parkBrake = $parkBrake;
    }

    /**
     * @param bool
     */
    public function switchOn(): bool
    {
        return $this->light = true;
    }
    /**
     * @param bool
     */

    public function switchOff(): bool
    {
        return $this->light = false;
    }
}