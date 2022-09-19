<?php

class Hood extends OpenableComponent {
    public function __construct(bool $opened = false)
    {
        parent::__construct(Components::Hood, $opened);
    }
}