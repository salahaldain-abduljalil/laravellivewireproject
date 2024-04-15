<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{

    public $settings;

    public function mount(){
        $this->settings = Setting::find(1);
    }


    public function rules(){

        return [

            'settings.name'=>'required|string',
            'settings.email'=>'required|string|email',
            'settings.phone'=>'required',
            'settings.facebook'=>'nullable|url',
            'settings.twitter'=>'nullable|url',
            'settings.instagram'=>'nullable|url',
            'settings.linkedin'=>'nullable|url',
        ];

    }

    public function submit(){

        $this->validate();
        $this->settings->save();
        $this->reset(['settings.name','settings.email','settings.phone','settings.facebook']);
        session()->flash('message','your Settings updated successfully');

    }
    public function render()
    {
        return view('livewire.admin.settings.update-settings');
    }
}
