<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        $userRole = Auth::user()->role;
        
        if ($userRole == "operator") {
            return view('operator.dashboard');
        }
        return view('members.dashboard');
    }
}
