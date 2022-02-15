<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\users;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function addRole(Request $request){         //adding new role
        $user = users::find($request->id);
        if($user){
            $role = new Roles();
            $role->id= $request->id;
            $role->name=$request->name;
            $role->guard_name=$request->guardname;
            $role->save();
            return "Role Saved Successfully!";
        }
        else{
            return "Please Enter registered User id";
        }

        
    }
}
