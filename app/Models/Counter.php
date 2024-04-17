<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;


    protected $table='counters';
    protected $primaryKey='id';
    protected $KeyType='integer';
    protected $guarded=['id'];


}
