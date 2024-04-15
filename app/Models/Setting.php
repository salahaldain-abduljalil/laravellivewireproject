<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;


    protected $table='settings';
    protected $fillable = ['name','email','address','phone','facebook','twitter','instagram','linkedin'];
    protected $primaryKey='id';
    protected $KeyType='integer';
    // protected $guarded= ['id'];


}
