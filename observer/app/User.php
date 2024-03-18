<?php

namespace App;

use SplObserver;
use SplSubject;

class User implements SplObserver
{
    private bool $notified = false;
    private string $username;

    public function __construct(private string $name)
    {
        $this->username = strtolower(str_replace(' ', '_', $this->name));
    }

    public function update(SplSubject $subject): void
    {
        $this->notified = !$this->notified;
    }

    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
