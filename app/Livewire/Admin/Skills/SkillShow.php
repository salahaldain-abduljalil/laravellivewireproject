<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillShow extends Component
{

    public $name,$progress;
    protected $listeners = ['skillshow'];

    public function skillshow($id){

   //the steps of show elements by Eloquent model.
   $record = Skill::find($id);
   $this->name = $record->name;
   $this->progress = $record->progress;


   //show edit modal.

   $this->dispatch('showModalToggle');


    }


    public function render()
    {
        return view('livewire.admin.skills.skill-show');
    }
}
