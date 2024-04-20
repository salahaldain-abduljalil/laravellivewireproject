<?php

namespace App\Livewire\Front\Component;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        return view('front.component.counters-component',['counters'=>Counter::take(8)->get()]);
    }
}
