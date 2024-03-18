<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\User;
use App\MusicBand;

class UserMusicBandTest extends TestCase
{
    public function testBandMembers()
    {
        $john = new User('John Doe');
        $jane = new User('Jane Smith');
        $emma = new User('Emma Johnson');

        $band = new MusicBand('EchoBeat');

        $band->attach($john);
        $band->attach($jane);
        $band->attach($emma);

        $band->detach($john);

        $band->addNewConcertDate('25/12/2028.', 'Madison Square Garden');

        $band->detach($emma);

        $this->assertFalse($john->isNotified());
        $this->assertTrue($jane->isNotified());
        $this->assertFalse($emma->isNotified());
    }
}
