<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relative extends Model
{
    use HasFactory;
    protected $table=  'relatives';
 
    protected $fillable = [
        'name',
        'age',
        'gender',
        'address',
        'phone',
        'bloodtype',
        'user_id'
    ];
    
}
