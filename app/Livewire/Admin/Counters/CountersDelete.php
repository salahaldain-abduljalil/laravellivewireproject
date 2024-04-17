<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{

    public $counter;

    protected $listeners = ['counterdelete'];

    public function counterdelete($id)
    {

        //here to delete record
        $this->counter = Counter::find($id);
        //show delete modal via javascript  hook show and hide
        $this->dispatch('deleteModalToggle');
    }


    public function submit()
    {
        //delete record from database.
        $this->counter->delete();
        //hide modal when the data is resented
        $this->dispatch('deleteModalToggle');
        //refresh counter data component in skill data blade.
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
