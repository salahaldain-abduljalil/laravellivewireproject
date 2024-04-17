<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessageDelete extends Component
{

    public $skill;

    protected $listeners = ['messagedelete'];

    public function messagedelete($id)
    {

        //here to delete record
        $this->skill=Message::find($id);
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
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.message-delete');
    }
}
