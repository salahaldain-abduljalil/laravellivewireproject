<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
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
        return view('admin.messages.messages-data', ['data' => Message::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }

}
