<?php

namespace App;

use SplSubject;
use SplObserver;

class MusicBand implements SplSubject
{
    private array $fans = [];
    private array $concerts = [];

    public function __construct(private string $bandName) {}

    public function attach(SplObserver $fan): void
    {
        $this->fans[] = $fan;
    }

    public function detach(SplObserver $fan): void
    {
        $this->fans = array_filter($this->fans, fn($a) => $a !== $fan);
        if($fan->isNotified() === false) return;
        $fan->update($this);
    }

    public function notify(): void
    {
        foreach ($this->fans as $fan) {
            $fan->update($this);
        }
    }

    public function addNewConcertDate(string $date, string $venue): void
    {
        $this->concerts[] = [
            'date' =>  $date,
            'venue' => $venue
        ];

        $this->notify();
    }
}
