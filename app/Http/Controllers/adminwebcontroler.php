<?php

namespace App\Http\Controllers;

use App\Models\diseases;
use App\Models\doctor;
use App\Models\hospital;
use App\Models\midicall;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class adminwebcontroler extends Controller
{


    public function showhospitalsearch(){ 
        return view('hospitaldata');
    }
    ////////////////////////////read
      public function hospitalsearch(request $request)
      {    
      $search=$request->input('search');
      $hospital=DB::table('hospitals')->where('user_id',"%$search%")->get();
      return view('meddata',['data'=>$hospital]);      
      }
  ///////////////////////////add
      public function addhospital(Request $request)
      {
      $data= $request->validate([
      'hos_name'=>'required|string', 
      'hos_add'=>'required|string', 
      'hos_phone'=>'required|',
      ]);           
      hospital::create($data);
      //return view('dataentry.profile');
      }
      /////////////////update
       public function updatehospital(Request $request,hospital $id )
      {
      $data= $request->validate([       
      'hos_name'=>'required|string', 
      'hos_add'=>'required|string', 
      'hos_phone'=>'required|',
      ]);            
      $id->update($data);    }
      ///////////////////delate
      public function destroyhospital(hospital $id)
      {
          $id->delete();      //return redirect('contact')->with('flash_message', 'Contact deleted!');  
      }
  ////////////////////////////////////////////////////////diseases
  
  public function showdiseasessearch(){    
      return view('diseases.diseasesdata');
      }
      ////////////////////////////read
        public function diseasessearch(request $request)
        {     
            $search=$request->input('search');
            $diseases=DB::table('diseases')->where('id' , 'like' ,"%$search%")->get();
            return view('diseases.disdata',['data'=>$diseases]);
        }
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
       return view('medical.medicaldata');
  }
  ////////////////////////////read
    public function medicalsearch(request $request)
    {     
        $search=$request->input('search');
        $medical =DB::table('medicals')->where('id' , 'like' ,"%$search%")->get();
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
  ////////////////////////////////////////////////////////doctor
  
  public function showdoctorsearch(){    return view('doctor.doctordata');
  }
  ////////////////////////////read
    public function doctorsearch(request $request)
    {     
        $search=$request->input('search');
        $doctor =DB::table('doctors')->where('id' , 'like' ,"%$search%")->get();
        return view('doctor.docdata',['data'=>$doctor]);
    }
      /////////////////////////////////////////add
      public function adddoctor(Request $request)
          {
              $data= $request->validate([
                  
                  'name'=>'required|', 
                  'specialist'=>'required|',
                  'phone'=>'required|',
              ]);        
              
               doctor::create($data);
           }
  
  /////////////////////////////////////////update
          public function updatedoctor(Request $request,doctor $id )
          {
          $data= $request->validate([   
              'name'=>'required|', 
              'specialist'=>'required|',
              'phone'=>'required|',
          ]);            
          $id->update($data);
      }
      ////////////////////////////////////////delete
      public function destroydoctor(doctor $id)
      {
          $id->delete();    }
  //////////////////////////////////////////////////////////user
  public function showusersearch(){ 
      return view('userdata');
  }
  ////////////////////////////read
    public function usersearch(request $request)
    {    
    $search=$request->input('search');
    $user=DB::table('users')->where('id',"%$search%")->get();
    return view('meddata',['data'=>$user]);      
    }
  ///////////////////////////add
    public function adduser(Request $request)
    {
    $data= $request->validate([
      'name'=> 'required|string',
      'email'=> 'required|string',
      "password"=> 'required|string',
       'age'=>'required|',
      'gender'=>'required|string',
      'address'=>'required|string',
      'state'=>'required|string',
    ]);           
    user::create($data);
    //return view('dataentry.profile');
    }
    /////////////////update
     public function updateuser(Request $request,user $id )
    {
    $data= $request->validate([       
    'hos_name'=>'required|string', 
    'hos_add'=>'required|string', 
    'hos_phone'=>'required|',
    ]);            
    $id->update($data);    }
    ///////////////////delate
    public function destroyuser(user $id)
    {
        $id->delete();      //return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }}
