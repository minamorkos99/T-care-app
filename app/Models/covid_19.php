<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class covid_19 extends Model
{
    use HasFactory;
    protected $table=  'covid_19s';
 
    protected $fillable = [
         
        'faver', 
        'tiredness', 
        'Dry_Cough', 
        'Difficulty_in_Breathing', 
        'Sore_Throat',      
        'Pains', 
        'Nasal_Congestion', 
        'Runny_Nose', 
        'Diarrhea', 
        'Age_0_9', 
        'Age_10_19', 
        'Age_20_24', 
        'Age_25_59', 
        'Age_60', 
        'gender',
        'contact_dont_know',
        'contact_no',
        'contact_yes',
        'color'
        
        
        
       
        
    ];
}
