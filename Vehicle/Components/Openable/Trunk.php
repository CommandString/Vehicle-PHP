<?php

class Trunk extends OpenableComponent {
    public function __construct(bool $opened = false)
    {
        parent::__construct(Components::Trunk, $opened);
    }
}