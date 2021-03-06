<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class LiveSearch extends Component
{
    protected $data;

    protected $results = [];

    protected $queryString = ['q'];

    public $q;

    public function mount()
    {
        $this->data = require __DIR__.'/../test-data.php';
    }

    protected function getResultsProperty()
    {
        $results = [];

        if ($this->q) {
            foreach ($this->data as $data) {
                if (stristr($data['title'], $this->q)) {
                    $results[] = $data;
                }
            }
        }

        return $results;
    }
}
