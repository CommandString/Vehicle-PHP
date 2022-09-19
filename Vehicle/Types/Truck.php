<?php

class Truck extends Vehicle {
    private $is4x4Enabled = false;

    public function __construct(string $name, int $year, int $weight, Brands $brand, int $doors)
    {
        parent::__construct($name, $year, $weight, $brand, $doors, Types::Truck);
    }

    public function enable4x4(): self
    {
        return $this->set4x4(true);
    }

    public function disable4x4(): self
    {
        return $this->set4x4(true);
    }

    public function is4x4Enabled(): bool
    {
        return $this->is4x4Enabled;
    }

    public function is4x4Disabled(): bool
    {
        return (!$this->is4x4Enabled);
    }

    private function set4x4(bool $status): self
    {
        $this->isIn4x4 = $status;
        return $this;
    }
}