<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loggedIn(Request $request){

        $name = $request->name;
        $password = $request->password;

        $person = person::where('name', '=', $name)->where('password', '=', $password)->first();
        if (!$person) {
            return back()
            ->withErrors(['Incorrect username or Password']);
        }

        return redirect()->route('contact');
    }
}

