<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{

    public $name;

    public function rules(){
        return [
            'name'=>'required|string',
        ];
    }
    public function submit(){
       $data = $this->validate();
        //save data into database
       Category::create($data);
        $this->reset(['name']);

        //hide modal when the data is resented
        $this->dispatch('CreateModalToggle');
        //refresh skills data component
        $this->dispatch('refreshData')->to(CategoriesData::class);



    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
