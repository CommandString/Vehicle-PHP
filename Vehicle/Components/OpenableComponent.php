<?php

abstract class OpenableComponent {
    protected bool $opened;
    public readonly Components $type; 

    public function __construct(Components $type, $opened = false) {
        $this->opened = $opened;
        $this->type = $type;
    }

    public function isOpened(): bool
    {
        return $this->opened;
    }

    public function isClosed(): bool
    {
        return (!$this->opened);
    }
    
    public function open(): self
    {
        return $this->set(true);
    }

    public function close(): self
    {
        return $this->set(false);
    }

    public function set(bool $opened): self
    {
        if ($this->opened === $opened) {
            return $this;
        }

        $this->opened = $opened;
        return $this;
    }
}