<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill,$name,$progress;
    protected $listeners = ['SkillUpdate'];

    public function SkillUpdate($id){

   //the steps of edit 1 fill skill by Eloquent model
   $this->skill = Skill::find($id);
   $this->name = $this->skill->name;
   $this->progress = $this->skill->progress;
   $this->resetValidation();

   //show edit modal

   $this->dispatch('editModalToggle');


    }

    public function rules(){
        return [
            'name'=>'required|string',
            'progress'=>'required|numeric',
        ];
    }
    public function submit(){
       $data = $this->validate();
        //save data into database
    $this->skill->update($data);
     //hide modal when the data is resented
        $this->dispatch('editModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(SkillData::class);



    }

    public function render()
    {
        return view('livewire.admin.skills.skills-update');
    }
}
