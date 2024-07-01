<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ChangePassword()
    {
        return view('change-password');    
    }

    public function updatepassword(Request $request)
    {
    //    dd($request->all());

       $request->validate([

            'old_password' => 'required',
            'new_password' => 'required |confirmed',
            
       ]);
           
    }
}
