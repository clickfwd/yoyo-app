<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Spinning extends Component
{
    protected static function delay()
    {
        sleep(2);
    }

    public function normal()
    {
        self::delay();
    }

    public function withDelay()
    {
        self::delay();
    }

    public function addClass()
    {
        self::delay();
    }

    public function addAttribute()
    {
        self::delay();
    }

    public function hide()
    {
        self::delay();
    }

    public function all()
    {
        sleep(3);
    }
}
