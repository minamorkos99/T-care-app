<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diseases extends Model
{
    use HasFactory;
    protected $table=  'diseases';
 
    protected $fillable = [
        'id',
        'Diabetes_mellitus', 
        'Heart_failure', 
        'Acute_coronary_syndrome',
        'Myocardial_infarction',
        'rheumatic_heart_disease',
        'Hypertension',
        'Portal_Hypertension',
        'Description1',
        'Chronic_kidney_disease',
        'Nephritic_and_nephrotic_syndrome',
        'Description2',
        'Renal_cell_carcinoma',
        'Chronic_leukemia',
        'Description3',
        'immune_suppression',
        'immune_thrombocytopenic',
        'Description4',
       ' AIDS',
        'Description5',
       ' Osteoporosis',
        'Description6',
        'COVID_19',
        'Description7'
        
    ];
}
