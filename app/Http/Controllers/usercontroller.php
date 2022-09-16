<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\relative;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

class usercontroller extends Controller
{
    


    /* Create a new AuthController instance.
    * @return void
    */
   public function __construct() {
       $this->middleware('auth:api', ['except' => ['login', 'register']]);
     //  Auth::shouldUse('api');
   }
   /**
    * Get a JWT via given credentials.
    *
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string|min:6',
        ] );
        if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
        }
        if (!$token=$this->guard()->attempt($validator->validated()))
        {
            return response()->json(['error' => 'Unauthorized'], 401);
        }    
        return $this->createNewToken($token);
    }
    /**
    * Register a User.
    *
    * @return \Illuminate\Http\JsonResponse
    */
 public function register(Request $request) {
       $validator = Validator::make($request->all(), [
           'name' => 'required|string|between:2,100',
           'email' => 'required|string|email|max:100|unique:users',
           'password' => 'required|string|min:6',
           'age'=>    'required|',
           'gender'=>    'required|string',
           'address'=>    'required|string',
 
       ]);
       if($validator->fails()){
           return response()->json($validator->errors()->toJson(), 400);
       }
      
       $user = User::create(array_merge(
                   $validator->validated(),
                   ['password' => bcrypt($request->password)]
               ));
       return response()->json([
           'message' => 'User successfully registered',
           'user' => $user
       ], 201);
   }
   /**
    * Log the user out (Invalidate the token).
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout() {
       auth()->logout();
       return response()->json(['message' => 'User successfully signed out']);
   }
   /**
    * Refresh a token.
    * @return \Illuminate\Http\JsonResponse
    */
    public function refresh() {
       return $this->createNewToken(auth()->refresh());
   } 
   /**
    * Get the authenticated User.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function userProfile() {
       
           return response()->json(auth::guard('api')->user());
       }
//////////////////////////////////////////
       public function update(User $id,Request $request)
       {
           User::find($id);
           $data=$request->validate([
               'name' => 'required|string|between:2,100',
               'email' => 'required|string|email|max:100|unique:users',
               'password' => 'required|string|min:6',
           ]);
            $id->update($data);
            return response()->json(['data updated succsessfuly']);

        }
///////// /////////////////////////////////
       public function showrelative($id)
    {
        $contact = relative::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }
    /////////////////////////////////////
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
             $data['user_id']=auth::guard('api')->user()->id;

            relative::create($data);

            return response()->json(["relatives added susc "]);
        }
        /////////////////////////////////////////
        public function updaterelativeform($id)
        {       
            relative::find($id);   
        return view('dataentry.userdata');
        }
        public function updaterelative(Request $request, $id )
        {
            
        $x=relative::find($id);
        $data= $request->validate([   
            'name'=>'required|string',
                'age'=>'required|',
                'gender'=>'required|string',
                'address'=>'required|string',
                'bloodtype'=>'required|string',
                'user_id'
        ]);            
        $x->update($data);
        return view('dataentry.profile');
        }
        ////////////////////////////////////////
        public function destroyrelative($id)
        {
            relative::destroy($id);
            return redirect('contact')->with('flash_message', 'Contact deleted!');  
        }
       /* public function addmedical(Request $request)
        {
            $data= $request->validate([
                   
                'bloodtype'=>'required|string',
                'hospital_id',
                'model_id',
                'doctor_id',
                'diseases_id', 
                'user_id'
            ]);           
            $data['user_id']=auth::guard('api')->user()->id;
            $data['hospital_id']=auth::guard('api')->user()->id;
            $data['model_id']=auth::guard('api')->user()->id;
            $data['doctor_id']=auth::guard('api')->user()->id;
            $data['diseases_id']=auth::guard('api')->user()->id;


            relative::create($data);

            return response()->json(["medical added susc "]);
        }
        public function addhospital(Request $request)
        {
            $data= $request->validate([
                'hos_id'=>'required|',
                'hos_name'=>'required|string', 
                'hos_add'=>'required|string', 
                'hos_phone'=>'required|',
            ]);           
            $data['user_id']=auth::guard('api')->user()->id;

            relative::create($data);

            return response()->json(["medical added susc "]);
        }
       
        public function adddoctor(Request $request)
        {
            $data= $request->validate([
                'doctor_id'=>'required|',
                'name'=>'required|', 
                'specialist'=>'required|',
                'phone'=>'required|',
            ]);           
            $data['user_id']=auth::guard('api')->user()->id;

            relative::create($data);

            return response()->json(["medical added susc "]);
        }
        public function adddiseases(Request $request)
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
                'diseases_id'
            ]);           
            $data['user_id']=auth::guard('api')->user()->id;

            relative::create($data);

            return response()->json(["medical added susc "]);
        }
        public function addmodel(Request $request)
        {
            $data= $request->validate([
                'M_id'=>'required|', 
                'faver'=>'required|', 
                'tiredness'=>'required|', 
                'Dry_Cough'=>'required|', 
                'Difficulty_in_Breathing'=>'required|', 
                'Sore_Throat'=>'required|', 
                'None_Sympton'=>'required|', 
                'Pains'=>'required|',
                'Nasal_Congestion'=>'required|',
                'Runny_Nose'=>'required|',
                'Diarrhea'=>'required|',
                'None_Experiencing'=>'required|',
                'Age_0_9'=>'required|',
                'Age_10_19'=>'required|', 
                'Age_20_24'=>'required|', 
                'Age_25_59'=>'required|', 
                'Age_60'=>'required|', 
                'gender'=>'required|',
                'color'=>'required|',
            ]);           
            $data['user_id']=auth::guard('api')->user()->id;

            relative::create($data);

            return response()->json(["medical added susc "]);
        }*/
       public function showdoctors()
       {
            
       }    
       public function select_doc(Request $request){ 
       

        }

       public function showmydoc()
       { 
                          
       }

       
       


public function addapp(Request $request)
{


}


/**
* Get the token array structure.
*
* @param  string $token
*
* @return \Illuminate\Http\JsonResponse
*/
protected function createNewToken($token){
   
   return response()->json([
       'access_token' => $token,
       'token_type' => 'bearer',
       'expires_in' => auth('api')->factory()->getTTL() * 60,
       'user'=> Auth::guard('api')->user()
   ]);
}
protected function guard()
{
   return Auth::guard('api');
   
}
}
