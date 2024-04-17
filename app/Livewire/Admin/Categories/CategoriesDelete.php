<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{

    public $name , $x;

    protected $listeners = ['categoriesdelete'];

    public function categoriesdelete($id)
    {

        //here to delete record
        $this->x=Category::find($id);
        $this->name = $this->x->name;
        //show delete modal via javascript  hook show and hide
        $this->dispatch('deleteModalToggle');
    }


    public function submit()
    {
        //delete record from database.
        $this->x->delete();
        //hide modal when the data is resented
        $this->dispatch('deleteModalToggle');
        //refresh names data component in name data blade.
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
