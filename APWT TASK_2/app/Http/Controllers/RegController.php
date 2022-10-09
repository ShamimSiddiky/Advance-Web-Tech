<?php

namespace App\Http\Controllers;
use App\Models\Person;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function reg(){
        return view('reg');
    }

    public function userCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|max:20",
            "password"=>"required|min:8|max:20",
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );
        $person = new Person();
        $person->name = $request->name;
        $person->password = $request->password;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->save();

        return redirect()->route('login');
    }
}

