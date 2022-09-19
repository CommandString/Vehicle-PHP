<?php

class Door extends OpenableComponent {
    public readonly OpenableComponent $window;

    public function __construct(bool $opened = false)
    {
        parent::__construct(Components::Door, $opened);
        $this->window = new Window();
    }
}