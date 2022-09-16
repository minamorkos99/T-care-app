<?php

namespace App\Http\Controllers;
use App\Models\relative;

use App\Models\User;
use App\Models\des;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;


class userappcontroller extends Controller
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

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
      //  Auth::shouldUse('api');
    }


    public function logout()
    {Auth::guard('api')->logout();
        return response()->json(["logout"]);
    }
    public function viewserdata($id)
    {    
      $user=DB::table('users')->where('id',$id)->get();  
       return response()->json([
                       'user'=>$user,
                       ]);
            
    } 
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string',
            'email'=> 'required|string',
            'password'=>'required|string',
            'age'=>'required|',
            'gender'=>'required|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'state'=>'required|string',
            'MCA'=>'required|string',
            'em_num'=>'required|string'

        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        // if($request->hasFile('profile_img')){
        //     $filename = $request->profile_img->getClientOriginalName();
        //     $request->profile_img->storeAs('profile_img',$filename,'public');
            
        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user], 201);
}
    
public function login(Request $request){
    $validator = Validator::make($request->all(), [
    'email' => 'required|email',
        'password' => 'required|string',
    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }
    if (!$token=$this->guard()->attempt($validator->validated()))
    {
        return response()->json(['message' => 'error please check your user name and password and try again',
    'status'=>'false'], 401);
    }
    return $this->createNewToken($token);     

}
    /////////////////update

    public function destroyuser(user $id)
    {
        $id->delete(); 
        return response()->json(['acc deleted']);
    }

    public function userview($id)
   {    
    $diseases= DB::table('des')->where('user_id',$id)->get();
    $user=DB::table('users')->where('id',$id)->get();  
    $rel=DB::table('relatives')->where('user_id',$id)->get();                                  
     return response()->json([
                    'diseases'=>$diseases,
                     'user'=>$user,
                     'rel'=>$rel
                     ]);
           
   }    
    public function showde($id)
        {
            $user=DB::table('users')->where('id',$id)->get();  
            $diseases=DB::table('des')->where('user_id',$id)->get();  
                         return response()->json([
                            'data'=>$diseases,
                            'user'=>$user]);

        }
        public function updatediseases(Request $request,des $id)
        {        
       $reqdata = $request->all(); 
        $lesson= des::where('id',$id)->update($reqdata);

       
        return response()->json([
            'status'=>'true'
            ,'Program updated successfully'=>$lesson]);    
    }

    public function adddiseases(Request $request, $id)
    {
         $data= $request->validate([
             'name'=>'required|string',
             'age'=>'required|',
             'gender'=>'required|string',
             'address'=>'required|string',
             'bloodtype'=>'required|string',
             'user_id'=>$id
         ]);           
         relative::create($data);
     }
      
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
