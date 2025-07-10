<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsertRequest;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        return view ('register');
    }
    
    public function add(){
        $users=User::all();
        return view('register',compact('$users'));
    }

    public function create(UserRequest $request){
        $user=$request->only(['email','password']);
        return redirect('/register');
    }
}
