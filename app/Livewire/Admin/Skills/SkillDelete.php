<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillDelete extends Component
{

    public $skill;

    protected $listeners = ['skilldelete'];

    public function skilldelete($id)
    {

        //here to delete record
        $this->skill=Skill::find($id);
        //show delete modal via javascript  hook show and hide
        $this->dispatch('deleteModalToggle');
    }


    public function submit()
    {
        //delete record from database.
        $this->skill->delete();
        //hide modal when the data is resented
        $this->dispatch('deleteModalToggle');
        //refresh skills data component in skill data blade.
        $this->dispatch('refreshData')->to(SkillData::class);
    }
    public function render()
    {
        return view('livewire.admin.skills.skill-delete');
    }
}
