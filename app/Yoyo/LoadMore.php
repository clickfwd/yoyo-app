<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class LoadMore extends Component
{
    public $offset = 0;

    public $limit = 1;

    protected $data;

    public function mount()
    {
        $this->data = require __DIR__.'/../test-data.php';
    }

    protected function getResultsProperty()
    {
        if ($results = array_splice($this->data, $this->offset, $this->limit)) {
            return $results;
        }

        return [];
    }
}
