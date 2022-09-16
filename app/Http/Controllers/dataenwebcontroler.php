<?php

namespace App\Http\Controllers;

use App\Models\diseases;
use Illuminate\Support\Facades\DB;

use App\Models\midicall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dataenwebcontroler extends Controller
{
    
////////////////////////////////////////////////////////
public function loginform(Request $request)
{
    return view('dataentry.login');
}
public function login(Request $request)
    {
        $DATA= Auth::guard('web')->attempt($request->only('email', 'password'));
    if ($DATA) {
        return view('dataentry.search');
    }}

//////////////////////read
  public function usersearch(request $request)
  {    
  $search=$request->input('search');
  $user=DB::table('users')->where('id',"%$search%")->get();
  return view('dataentry.userdata',['data'=>$user]);      
  }
////////////////////////////////////////////////////////diseases

/////////////////////////add
public function adddiseases(Request $request)
{
$data= $request->validate([
'Diabetes_mellitus'=>'required|string', 
'Heart_failure'=>'required|string', 
'Acute_coronary_syndrome'=>'required|string',
'Myocardial_infarction'=>'required|string',
'rheumatic_heart_disease'=>'required|string',
'Hypertension'=>'required|string',
'Portal_Hypertension'=>'required|string',
'Description1'=>'required|string',
]);           
diseases::create($data);
}
//////////////////////////update 
public function updatediseases(Request $request, diseases $id)
{       
$data= $request->validate([
    'Diabetes mellitus'=>'required|', 
    'Heart failure'=>'required|', 
    'Acute coronary syndrome'=>'required|',
    'Myocardial infarction'=>'required|',
    'rheumatic heart disease'=>'required|',
    'Hypertension'=>'required|',
    'Portal Hypertension'=>'required|',
    'Description1'=>'required|',
]);           
$id->updated($data);
}
/////////////////////delete
public function destroydiseases(diseases $id)
{
    $id->delete();   }

////////////////////////////////////////////////////////medical
public function showmedicalsearch(){   
return view('medicaldata');
}
////////////////////////////read
public function medicalsearch(request $request)
{     
 $search=$request->input('search');
 $medical = midicall::where('id' , 'like' ,"%$search%")->get();
 return view('medical.meddata',['data'=>$medical]);
}
//////////////////////////add

public function addmedical(Request $request)
{
$data= $request->validate([
   'hospital_id '=>'required|', 
   'doctor_id '=>'required|', 
   'diseases_id '=>'required|',
   'user_id '=>'required',
   'bloodtype'=>'required|',       
]);              
midicall::create($data);
//return view('dataentry.profile');
}
///////////////////////////////////update
public function updatemedical(Request $request,midicall $id)
{
   $data= $request->validate([
       'hospital_id '=>'required|', 
       'doctor_id '=>'required|', 
       'diseases_id '=>'required|',
       'user_id '=>'required',
       'bloodtype'=>'required|',       
   ]);             
   $id->update($data); 
}   

///////////////////////////////////////////delete
public function destroymedical(midicall $id)
{
   $id->delete();    }

}

