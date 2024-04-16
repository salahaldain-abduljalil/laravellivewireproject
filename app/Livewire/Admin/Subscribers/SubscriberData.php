<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscribers;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriberData extends Component
{

    use WithPagination;

    public $search;
    protected $listeners = ['refreshData' => '$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.subscribers.subscriber-data', ['data' => Subscribers::where('email', 'like', '%' . $this->search . '%')->paginate(2)]);
    }
 }
