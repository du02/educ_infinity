<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user()->roles;

        if($user === "ADMIN")
        {
            return view('admin.home');
        }
        elseif($user === "TEACHER")
        {
            return view('teacher.home');
        }
        else
        {
            //return view('studant.home');
            return view('studant.character');
        }

    }
}
