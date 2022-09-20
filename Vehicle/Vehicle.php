<?php

abstract class Vehicle {
    public readonly array  $doors;
    public readonly Hood   $hood;
    public readonly Trunk  $trunk;

    public function __construct(public readonly string $name, public readonly int $year, public readonly int $weight, public readonly Brands $brand, public readonly int $doorCount, public readonly VehicleTypes $type)
    {
        $this->trunk = new Trunk();
        $this->hood = new Hood();

        $doors = [];
        for ($i = 1; $i <= $this->doorCount; $i++) {
            $doors[$i] = new Door();
        }

        $this->doors = $doors;
    }

    public function getDoor(int $door): Door
    {
        if (!isset($this->doors[$door])) {
            throw new Exception("This vehicle doesn't have ".(new NumberFormatter("en", NumberFormatter::SPELLOUT))->format($door)." doors");
        }

        return $this->doors[$door];
    }

    private function setAll(bool $status): self
    {
        foreach ($this->doors as $door) {
            $door->set($status);
            $door->window->open();
        }

        $this->trunk->set($status);
        $this->hood->set($status);

        return $this;
    }

    public function openAll(): self
    {
        return $this->setAll(true);
    }

    public function closeAll(): self
    {
        return $this->setAll(false);
    }
}
