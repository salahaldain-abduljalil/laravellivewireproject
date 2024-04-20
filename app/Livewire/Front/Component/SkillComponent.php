<?php

namespace App\Livewire\Front\Component;

use App\Models\Skill;
use Livewire\Component;

class SkillComponent extends Component
{
    public function render()
    {
        return view('front.component.skill-component',['skill'=>Skill::take(5)->get()]);
    }
}
