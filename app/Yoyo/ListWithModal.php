<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class ListWithModal extends Component
{
    public $itemId;

    public $title;

    protected $data;

    protected $queryString = ['page'];

    protected $limit = 4;

    public function mount()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION['data'] = $_SESSION['data'] ?? require __DIR__.'/../test-data.php';

        $this->data = &$_SESSION['data'];
    }

    public function edit($id)
    {
        $this->itemId = $id;

        $this->title = $this->data[$id]['title'] ?? '';
    }

    public function save()
    {
        $this->emitTo('list-with-modal', 'close');

        $this->data[$this->itemId]['title'] = $this->title;
    }

    public function reset()
    {
        $_SESSION['data'] = require __DIR__.'/../test-data.php';

        $this->data = &$_SESSION['data'];
    }

    public function getActionProperty()
    {
        return $this->componentAction;
    }

    protected function getResultsProperty()
    {
        $results = array_chunk($this->data, $this->limit)[0];

        return $results;
    }

    public function render()
    {
        if ($this->componentAction == 'edit') {
            return $this->view('list-with-modal-edit');
        }

        return parent::render();
    }
}
