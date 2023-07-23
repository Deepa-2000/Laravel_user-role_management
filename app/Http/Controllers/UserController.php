<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function index(){
        return view('register');
    }
    function login(){
        return view('login');
    }

    function validate_register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact'=> 'required|min:10',
            'usertype'=> 'required',
            'password' => 'required|min:6'
        ]);
        $data=$req->all();
        User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'contact'=> $data['contact'],
            'usertype' => $data['usertype'],
            'password'=> Hash::make($data['password'])
        ]);

        return redirect('login')->with('success','Registration Completed, now you can login...!');
    }
    function validate_login(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials=$req->only('email','password');
        if(Auth::attempt($credentials)){    
            return redirect('/dashboard');
        }
        return redirect('login')->with('success', 'Login details are not valid!!');

    }

    function dashboard(){
        if (Auth::check()) {
            return view('/dashboard');
        }
        return redirect('/login')->with('success','you are not allowed to access!!');
    }
    public function edit_profile($id)
    {
        $data = User::find($id);
        return view('/edit_profile', compact('data'));
    }
    function validate_profile(Request $req,$id){
        $user = User::find($id);
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->update();
        return redirect('/dashboard')->with('success','Record Updated Successfully!!');
        

    }
    function logout(){
        session_unset();
        Auth::logout();
        return Redirect('login');
    }

}
