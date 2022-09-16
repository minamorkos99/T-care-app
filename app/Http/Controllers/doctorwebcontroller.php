<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\diseases;

use App\Models\User;
use Illuminate\Http\Request;

class doctorwebcontroller extends Controller
{
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
            /////////////////////////diseases
    
            /////////////////////update 
            public function updatediseases(Request $request,diseases $id)
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
            //return view('dataentry.profile');
            }
            
    /////////////////////////////////////////////
    
}
