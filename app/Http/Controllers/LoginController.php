<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    }
    
    public function authentication(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if($request->email == 'admin@gmail.com'){
                    return redirect()->intended('/admin');
                }
                else{
                    return redirect()->intended('/dashboard');
                }
            }
    
            return back()->with('loginError', 'Login gagal, periksa kembali email dan password!');

    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
