<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Todo extends Component
{
    public $id;

    public $task;

    public $taskNew;

    public $filter;

    protected $queryString = ['filter'];

    protected $list;

    protected $editId;

    public function mount()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION['list'] = $_SESSION['list'] ?? [
            ['id' => 1, 'title' => 'Build a framework', 'status' => 'completed'],
            ['id' => 2, 'title' => 'Buy groceries', 'status' => 'active'],
            ['id' => 3, 'title' => 'Do laundry', 'status' => 'active'],
        ];

        $this->list = &$_SESSION['list'];
    }

    public function add()
    {
        if ($task = trim($this->taskNew)) {
            $this->list[] = ['id'=> $this->getNextId(), 'title' => $task, 'status' => 'active'];
        }
    }

    public function edit()
    {
        $this->dispatchBrowserEvent('todo-edit');

        $this->editId = $this->id;
    }

    public function save()
    {
        if (! $this->id) {
            return;
        }

        if (trim($this->task) == '') {
            $this->delete();

            return;
        }

        array_walk($this->list, function (&$entry) {
            if ($entry['id'] == $this->id) {
                $entry['title'] = $this->task;
            }
        });
    }

    public function toggle()
    {
        foreach ($this->list as $key => $entry) {
            if ($entry['id'] !== $this->id) {
                continue;
            }

            $this->list[$key]['status'] = $entry['status'] == 'completed' ? 'active' : 'completed';

            break;
        }
    }

    public function toggleAll()
    {
        if ($this->count == $this->count_completed) {
            array_walk($this->list, function (&$entry) {
                $entry['status'] = 'active';
            });

            $this->forgetComputed('count_completed');

            return;
        }

        array_walk($this->list, function (&$entry) {
            $entry['status'] = 'completed';
        });

        $this->forgetComputed('count_completed');
    }

    public function delete()
    {
        $this->list = array_filter($this->list, function ($entry) {
            return $entry['id'] !== $this->id;
        });
    }

    public function clearCompleted()
    {
        $this->list = array_filter($this->list, function ($entry) {
            return $entry['status'] == 'active';
        });
    }

    protected function getEntriesProperty()
    {
        if (! $this->filter) {
            return $this->list;
        }

        return array_filter($this->list, function ($entry) {
            return $entry['status'] == $this->filter;
        });
    }

    protected function getCountProperty()
    {
        return count($this->list);
    }

    protected function getCountCompletedProperty()
    {
        return $this->countByState('completed');
    }

    protected function getCountActiveProperty()
    {
        return $this->countByState('active');
    }

    protected function countByState($state)
    {
        $count = 0;

        foreach ($this->list as $entry) {
            if ($entry['status'] == $state) {
                $count++;
            }
        }

        return $count;
    }

    protected function getEditingProperty()
    {
        return $this->editId;
    }

    protected function getNextId()
    {
        if (empty($this->list)) {
            return 1;
        }

        $max = 0;

        foreach ($this->list as $entry) {
            $max = max([$max, $entry['id']]);
        }

        return $max + 1;
    }
}
