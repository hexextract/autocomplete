<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function fetchUsers(Request $request)
    {
        if(!empty($request->searchname)){
            $users = User::select("name")->where("name", "LIKE", "%".$request->searchname. "%")->limit(5)->get();
            if(count($users)>0){
                return $users;
            }else{
                return response()->json("No User found", 204);
            }
        }
        return response()->json("Please provide search Name", 400);
    }



}