<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CreateCounters extends Component
{

    public $name, $count,$icon;

    public function rules(){
        return [
            'name'=>'required|string',
            'count'=>'numeric',
            'icon'=>'required',
        ];
    }
    public function submit(){
       $data = $this->validate();
        //save data into database
       Counter::create($data);
        $this->reset(['name','count','icon']);

        //hide modal when the data is resented
        $this->dispatch('CreateModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(CountersData::class);



    }
    public function render()
    {
        return view('admin.counters.create-counters');
    }
}
