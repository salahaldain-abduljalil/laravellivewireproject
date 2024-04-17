<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class UpdateCounters extends Component
{

    public $counter,$name,$count,$icon;
    protected $listeners = ['counterUpdate'];

    public function counterUpdate($id){

   //the steps of edit 1 fill counter by Eloquent model
   $this->counter = Counter::find($id);
   $this->name = $this->counter->name;
   $this->count = $this->counter->count;
   $this->icon = $this->counter->icon;
   $this->resetValidation();

   //show edit modal

   $this->dispatch('editModalToggle');


    }

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
    $this->counter->update($data);
     //hide modal when the data is resented
        $this->dispatch('editModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(CountersData ::class);



    }
    public function render()
    {
        return view('admin.counters.update-counters');
    }
}
