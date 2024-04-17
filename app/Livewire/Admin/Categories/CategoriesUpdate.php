<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{

    public $name , $x;
    protected $listeners = ['categoriesUpdate'];

    public function categoriesUpdate($id){
     $this->x = Category::find($id);
     $this->name = $this->x->name;

   $this->resetValidation();

   //show edit modal

   $this->dispatch('editModalToggle');


    }

    public function rules(){
        return [
            'name'=>'required|string',
        ];
    }
    public function submit(){
       $data = $this->validate();
        //save data into database
      $this->x->update($data);
     //hide modal when the data is resented
        $this->dispatch('editModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(CategoriesData::class);



    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
