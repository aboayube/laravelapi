<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\Api\UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class GeneralController extends Controller
{
    //
    public function all_user(){
        $users=User::all();
        return UserResource::collection($users);
    }
}
