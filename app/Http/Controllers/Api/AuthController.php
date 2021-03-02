<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request){
$validator=Validator::make($request->all(),[
    'email'=>'required|email',
    'password'=>'required|min:8',
]);
if($validator->failed()){
    return response()->json(['error'=>true,'message'=>$validator->errors()],200);
}
//يجيب من ركوست ايميل وباسورد
$credintial=request(['email','password']);
//عشان يعمل دخول لهذا مستخدم
$token=auth('api')->attempt($credintial);
   
if(!$token){
    return response()->json(['error'=>true,'message'=>'not authorize'],200);
}
return response()->json([
 'access_token'=>$token,
 'expire_in'=>auth('api')->factory()->getTTL()*3600,   
]);
}
public function logout(){
    auth('api')->logout();
    return response()->json(['error'=>false,'message'=>'logout successfuly'],200);

}
}
