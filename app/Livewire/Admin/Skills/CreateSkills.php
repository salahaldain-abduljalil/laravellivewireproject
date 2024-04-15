<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkills extends Component
{


    public $name, $progress;

    public function rules(){
        return [
            'name'=>'required|string',
            'progress'=>'required|numeric',
        ];
    }
    public function submit(){
       $data = $this->validate();
        //save data into database
       Skill::create($data);
        $this->reset(['name','progress']);

        //hide modal when the data is resented
        $this->dispatch('CreateModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(SkillData::class);



    }
    public function render()
    {
        return view('livewire.admin.skills.create-skills');
    }
}
