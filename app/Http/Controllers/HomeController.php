<?php

namespace App\Http\Controllers;

use App\Character;
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
        $access = Auth::user()->access;

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

            if($user === "STUDANT" && $access === 0)
            {
                $user = Auth::user()->id;
                return view('studant.character', compact('user'));
            }
            else
            {
                return view('studant.home');
            }

        }

    }
}
