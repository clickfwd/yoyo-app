<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class WishlistCounter extends Component
{
    public $likes = 0;

    protected $listeners = [
        'liked' => 'addedToWishList',
        'disliked' => 'removedFromWishList',
        'reset-likes' => 'reset',
    ];

    protected function addedToWishList()
    {
        $this->likes++;
    }

    protected function removedFromWishList()
    {
        $this->likes--;
    }

    protected function reset()
    {
        $this->likes = 0;
    }
}
