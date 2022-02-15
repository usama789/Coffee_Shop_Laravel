<?php

namespace App\Http\Controllers;
use App\Models\Permissions;
use App\Models\Roles;
use App\Models\role_has_permissions;

use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    //
    public function RolePermission(Request $request){           //adding permission against roles
        $permission = Permissions::find($request->permission_id);
        $role=Roles::find($request->role_id);
        

        if(!$permission){
            return "Please Enter Valid Permission Id";
           
        }
        elseif(!$role){
            return "Please Enter Valid Role ID";
        }
        else{
            $rolepermission= new role_has_permissions();
            $rolepermission->permission_id=$request->permission_id;
            $rolepermission->role_id=$request->role_id;
            $rolepermission->save();
            return "Role and Permission Saved Successfully!";
        }
        
    }
}
