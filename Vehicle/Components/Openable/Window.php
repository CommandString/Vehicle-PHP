<?php

class Window extends OpenableComponent {
    private $openPercentage;

    public function __construct(bool $opened = false)
    {
        parent::__construct(Components::Window, $opened);

        if ($this->isOpened()) {
            $this->openPercentage = 100;
        } else {
            $this->openPercentage = 0;
        }
    }

    private function setBy(int $set): self
    {
        if ($set + $this->openPercentage >= 100) {
            $this->set(true);
        } else if ($set + $this->openPercentage <= 0) {
            $this->set(false);
        } else {
            $this->openPercentage += $set;
            $this->opened = true;
        }

        return $this;
    }

    public function openBy(int $increment): self
    {
        return $this->setBy($increment);
    }

    public function closeBy(int $increment): self
    {
        return $this->setBy(-$increment);
    }

    public function set(bool $opened): self
    {
        if ($opened) {
            $this->openPercentage = 100;
        } else {
            $this->openPercentage = 0;
        }

        return parent::set($opened);
    }
}
