<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Pagination extends Component
{
    public $page = 1;

    public $pages;

    protected $data;

    protected $results = [];

    protected $queryString = ['page'];

    protected $limit = 3;

    public function mount()
    {
        $this->data = require __DIR__.'/../test-data.php';

        return $this;
    }

    public function _entries()
    {
        $results = array_chunk($this->data, $this->limit)[$this->page - 1] ?? [];

        return $results;
    }

    public function _start()
    {
        return 1 + (($this->page - 1) * $this->limit);
    }

    public function _end()
    {
        $end = $this->page * $this->limit;

        return $end > $this->_total() ? $this->_total() : $end;
    }

    public function _total()
    {
        return count($this->data);
    }

    public function _next()
    {
        return $this->page < $this->pages ? $this->page + 1 : false;
    }

    public function _previous()
    {
        return $this->page > 1 ? $this->page - 1 : false;
    }

    public function render()
    {
        $this->pages = $pages = count(array_chunk($this->data, $this->limit));

        return $this->view('pagination', compact('pages'));
    }
}
