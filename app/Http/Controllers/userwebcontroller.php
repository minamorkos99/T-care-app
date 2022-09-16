<?php

namespace App\Http\Controllers;
use App\Models\relative;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userwebcontroller extends Controller
{
    
 /**
     * Create a new AuthController instance.
     * @return void
     */
   
/**
     * Get a JWT via given credentials.
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */

   
    
    public function profile()
    {
        return view('user.home');
    }
    public function profilehome()
    {

        $rice = DB::table('users')
        ->where('id',Auth::guard('web')->user()->id)
        ->get();
        return view('user.profile',['show'=>$rice]);
            }
    public function register(Request $request)
    {
        $data= $request->validate
        ([
            'name'=> 'required|string',
            'email'=> 'required|string',
            "password"=> 'required|string',
            'age'=>'required|',
            'gender'=>'required|string',
            'address'=>'required|string',
            'state'=> 'required|string',
        ]);
        $data['password']=bcrypt($data['password']);
        if($request->input('state')=="user")
        {
            $data['state']="user";
            User::create($data);
        }
        elseif($request->input('state')=="doctor"){
            $data['state']="doctor";
            User::create($data);
        }
        elseif($request->input('state')=="dataentery"){
            $data['state']="dataentery";
            User::create($data);}
        else{return back()->withErrors(['wrong loged information']); }

return redirect('/profile');
}
     public function loginform()
    {
        return view('user.login');
    }
    
    
    public function login(Request $request)
    {
        $DATA= Auth::guard('web')->attempt($request->only('email', 'password'));
    if ($DATA) {
        return view('user.home');
    }
    }
    public function updateuser(Request $request,user $id )
    {
    $data= $request->validate([       
    'hos_name'=>'required|string', 
    'hos_add'=>'required|string', 
    'hos_phone'=>'required|',
    ]);            
    $id->update($data);    }
    public function destroyuser(user $id)
  {
      $id->delete();      //return redirect('contact')->with('flash_message', 'Contact deleted!');  
  }
    /////////////////////////////////////////////////////////////relative
    
   
       public function addrelative(Request $request)
       {
            $data= $request->validate([
                'name'=>'required|string',
                'age'=>'required|',
                'gender'=>'required|string',
                'address'=>'required|string',
                'bloodtype'=>'required|string',
                'user_id'
            ]);           
            relative::create($data);
        }
        public function logout()
       {Auth::guard('web')->logout();
        return redirect('loginform');
            
        }
        /////////////////////////////////////////
        public function updaterelative(Request $request,relative $id )
        {      
        $data= $request->validate([   
            'name'=>'required|string',
                'age'=>'required|',
                'gender'=>'required|string',
                'address'=>'required|string',
                'bloodtype'=>'required|string',
                'user_id'
        ]);            
        $id->update($data);
        return view('dataentry.profile');
        }
        ////////////////////////////////////////
        public function destroyrelative($id)
        {
            relative::destroy($id);
            return redirect('contact')->with('flash_message', 'Contact deleted!');  
        }

        protected function guard()
        {
        return Auth::guard('web');
        
        }  
}
