<?php

namespace App\Http\Controllers;
use App\Models\Permissions;

use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    //
    public function addPermission(Request $request){      //adding new permissions
       
            $permission = new Permissions();
            $permission->name=$request->name;
            $permission->guard_name=$request->guardname;
            $permission->save();
            return "Permission Saved Successfully!";
        
    }
}
