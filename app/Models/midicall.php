<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class midicall extends Model
{
    use HasFactory;
    protected $table=  'medicalls';
 
    protected $fillable = [
        'hospital_id',
        'model_id',
        'doctor_id',  
        'diseases_id',     
        'bloodtype',
        'user_id'
    ];
}
