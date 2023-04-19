<?php

namespace App\Http\Controllers;
use App\Events\ChatMessageSent;


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
        event(new ChatMessageSent("asdar fldksmdfomdsofm sfodskmof"));
        // return view('home');
        // return "test";
    }
}
