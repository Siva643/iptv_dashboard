<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\VideoView;
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
        $views_count = VideoView::count();

        $login_count = Information::first()->login_count;
        
        return view('home', compact('views_count', 'login_count'));
    }
}
