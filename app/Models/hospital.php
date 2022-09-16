<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;
    protected $table=  'hospitals';
 
    protected $fillable = [
        'id',
        'hos_name', 
        'hos_add', 
        'hos_phone'
    ];
}
