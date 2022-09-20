<?php

abstract class OpenableComponent {
    public function __construct(public readonly Components $type, protected bool $opened = false) {}

    public function isOpened(): bool
    {
        return $this->opened;
    }

    public function isClosed(): bool
    {
        return !$this->opened;
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
