<?php
namespace App\Http\Controllers;
use App\Models\manager;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loggedIn(Request $request){

        $name = $request->name;
        $password = $request->password;

        $manager = manager::where('name', '=', $name)->where('password', '=', $password)->first();
        
        if (!$manager) {
            return back()
            ->withErrors(['Incorrect username or Password']);
        }
        $request->session()->put('user',$manager->name);
        return redirect()->route('managerDash');
    }
    

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}

