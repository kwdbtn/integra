<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Newsflash;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $newsflash    = Newsflash::first();
        $applications = Application::all();
        return view('home', compact('newsflash', 'applications'));
    }
}
