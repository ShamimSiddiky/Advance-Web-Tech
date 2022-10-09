<?php

namespace App\Http\Controllers;
//use App\Http\PagesController;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('hello')->with('message', $message);
    }

    public function aboutus(){
        return view('layouts.aboutus');
    }

    public function products(){
        $product=array("PDF", "DOCX", "EXCEL");
        return view('layouts.product')->with('product', $product);
    }

    public function contactus(){
        return view('layouts.contactus');
    }

    public function team(){
        return view('layouts.team');
    }
}
