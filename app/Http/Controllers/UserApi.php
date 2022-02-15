<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;
// use App\Models\User;
use Validate;
use Illuminate\Support\Facades\Auth; 

class UserApi extends Controller
{
    public function register(Request $request){     //register new users
        
            $input = $request->all(); 
            $input['password'] = bcrypt($input['password']); 
            $user = users::create($input); 
            // $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['fname'] =  $user->fname;
            return redirect('login');
            return response()->json($success);
    }
    
    public function userLogin(Request $request){        //user login
        
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
           ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user();
             
            $success =  $user->createToken('token')-> plainTextToken;
            $request->session()->put("user",$user["id"]);
            return redirect('/');
            return response()->json($success); 
        } 
        else{ 
            return response()->json(['error'=>'Wrong User Cerdentials'], 401); 
        } 
}
    public function get(){         //getting all users 
        $users = users::all();
        return response()-> json($users);
    }
    public function getbyid($id){    //getting user by id
        $user = users::find($id);
        return response()-> json($user);
    }
    
    public function delete($id){            //deleting user by id
        $user = users::find($id);
        if($user){
            $user->delete();
            return response()->json([
                'status' => true,
                'message' => 'User successfully deleted!']);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'User not found',

            ],404);
        }
        
    }
}
