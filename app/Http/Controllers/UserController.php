<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function __construct(){

    }
    public function register(){
        return view('register');
    }

    public function storeUser(Request $req){

        // validation required fields
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
        ]);

        // dd($req->all());    //diees down the code at line 29 to check for errorss

        $user = new User();   // instance of user model
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('login');
    }

    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        
    }
}
