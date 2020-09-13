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
    public function teacher()
    {
        return view('teacher.home');
    }
    public function professor()
    {
        return view('professor.home');
    }
    public function parent()
    {
        return view('parent.home');
    }
    public function principal()
    {
        return view('principal.home');
    }

}
