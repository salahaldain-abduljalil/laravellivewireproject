<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    protected $table='skills';
    // protected $primaryKey='id';
    protected $fillable = ['name','progress'];
    // protected $KeyType='integer';
    // protected $guarded=['id'];


}
