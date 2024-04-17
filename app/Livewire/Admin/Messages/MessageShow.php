<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessageShow extends Component
{

    public $name,$email,$subject,$message;
    protected $listeners = ['messageShow'];

    public function messageShow($id){

   //the steps of show elements by Eloquent model.
   $record = Message::find($id);
   $this->name = $record->name;
   $this->email = $record->email;
   $this->subject = $record->subject;
   $this->message = $record->message;
 //change status to 1 for to be Active.
   $record->update(['status'=>'1']);


   //show edit modal.

   $this->dispatch('showModalToggle');
   //refresh the parent component.
   $this->dispatch('refreshData')->to(MessagesData::class);


    }

    public function render()
    {
        return view('admin.messages.message-show');
    }
}
