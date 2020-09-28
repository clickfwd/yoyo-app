<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Form extends Component
{
    public $data = [];

    public $success;

    public function validate()
    {
    }

    public function register()
    {
        if (! empty($this->data['email']) && ! empty($this->data['name'])) {
            $this->success = true;
        }
    }
}
