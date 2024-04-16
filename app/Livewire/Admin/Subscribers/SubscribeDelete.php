<?php

namespace App\Livewire\Admin\Subscribers;

use App\Livewire\Admin\Skills\SkillData;
use App\Models\Subscribers;
use Livewire\Component;

class SubscribeDelete extends Component
{

    public $subscriber;

    protected $listeners = ['subscriberdelete'];

    public function subscriberdelete($id)
    {

        //here to delete record
        $this->subscriber = Subscribers::find($id);
        //show delete modal via javascript  hook show and hide
        $this->dispatch('deleteModalToggle');
    }


    public function submit()
    {
        //delete record from database.
        $this->subscriber->delete();
        //hide modal when the data is resented
        $this->dispatch('deleteModalToggle');
        //refresh subscriber data component in skill data blade.
        $this->dispatch('refreshData')->to(SubscriberData::class);
    }
    public function render()
    {
        return view('admin.subscribers.subscribe-delete');
    }
}
