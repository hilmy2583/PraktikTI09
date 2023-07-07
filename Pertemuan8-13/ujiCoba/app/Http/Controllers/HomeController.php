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
        // return view('Pertemuan11.admin.dashboard');
        // return redirect('adminla/dashboard');
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager') {
            return redirect('/adminla/dashboard');
        } else {
            return redirect('/after_register');
        }
    }
}
