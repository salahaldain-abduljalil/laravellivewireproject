<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table='categories';
    protected $primaryKey='id';
    protected $KeyType='integer';
    protected $guarded=['id'];
    public function project(){
        $this->hasMany(Project::class);
    }


}
