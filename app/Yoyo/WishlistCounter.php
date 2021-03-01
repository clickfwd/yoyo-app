<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class WishlistCounter extends Component
{
    public $likes = 0;

    protected $props = ['likes'];

    protected $listeners = [
        'liked' => 'addedToWishList',
        'disliked' => 'removedFromWishList',
        'reset-likes' => 'reset',
    ];

    public function addedToWishList()
    {
        $this->likes++;
    }

    public function removedFromWishList()
    {
        $this->likes--;
    }

    public function reset()
    {
        $this->likes = 0;
    }
}
