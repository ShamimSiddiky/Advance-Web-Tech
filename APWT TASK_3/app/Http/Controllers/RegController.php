<?php

namespace App\Http\Controllers;
use App\Models\manager;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function registration(){
        return view('registration');
    }

    public function managerCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|max:20",
            "password"=>"required|min:8|max:20",
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );
        $manager = new manager();
        $manager->name = $request->name;
        $manager->password = $request->password;
        $manager->email = $request->email;
        $manager->phone = $request->phone;
        $manager->save();

        return redirect()->route('login');
    }
}

