<?php

namespace App\Http\Controllers;

use App\Models\diseases;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class doctorappcontroler extends Controller
{
    
 
//     public function logout()
//     {Auth::guard('api')->logout();
//         return response()->json(["logout"]);
//     }
//      public function destroyuser(user $id)
//         {
//             $id->delete();      //return redirect('contact')->with('flash_message', 'Contact deleted!');  
//         }
    
    
    
//     public function login(Request $request)
//     {
//         $DATA= Auth::guard('api')->attempt($request->only('email', 'password'));
//     if ($DATA) {
//         return response()->json(['user'=>$DATA]);
//     }
//     }

// /////////////////////////diseases

//   public function usersearch($id)
//   {$diseases=  DB::select('SELECT diseases.Chronic_leukemia,diseases.Description3 from midicalls JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id );  
//     $diseases1=  DB::select('SELECT diseases.id , diseases.Diabetes_mellitus,diseases.Description1 from midicalls JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id );
//     $diseases2=  DB::select('SELECT diseases.id  ,diseases.COVID_19, diseases.Description7 from midicalls JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id );
//     $diseases3=  DB::select('SELECT diseases.id  ,diseases.Nephritic_and_nephrotic_syndrome,diseases.Description2 from midicalls  JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id );
//     $diseases4=  DB::select('SELECT diseases.id  ,diseases.immune_thrombocytopenic, diseases.Description4 from midicalls JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id );
//     $user=DB::table('users')->where('id',$id)->get();  
        
//     $description= DB::select('SELECT diseases.Description1,diseases.Description2,diseases.Description3,diseases.Description4,diseases.Description5,diseases.Description5,diseases.Description6,diseases.Description7 from midicalls 
//      JOIN diseases ON midicalls.diseases_id=diseases.id and midicalls.user_id='.$id);
    
//     if ($diseases==null) {
//         return response()->json(['diseases_message'=>'no diseases for deses of this user ']);     
//     }
//     else
//      {
//             if(isEmpty( $description)) {
//                  return response()->json([
//                     'description_message'=>'no description for deses of this user ',
//                     'data1'=>$diseases,
//                     'data2'=>$diseases1,
//                     'data3'=>$diseases2,
//                     'data4'=>$diseases3,
//                     'data5'=>$diseases4,
//                     'user'=>$user

//                     ]);     
//             }      
//              else
//             {
//             return response()->json(['userdiseases'=>$diseases]);     
//             }
  
//     }
    

// }
  
       
//         /////////////////////update 
//   public function updatediseases(Request $request, $id)
//         {        
           

//        $reqdata = $request->all(); 
//         $lesson= diseases::where('id',$id)->update($reqdata);

       
//         return response()->json([
//             'status'=>'true'
//             ,'Program updated successfully'=>$lesson]);    
 
        
    
//     }
   
        
// /////////////////////////////////////////////

 
 
}

