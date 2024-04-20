<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table  = 'projects';
    protected $primaryKey='id';
    protected $KeyType='integer';
    protected $guarded=['id'];

    public function category(){
        $this->belongsTo(Category::class);
    }


}
