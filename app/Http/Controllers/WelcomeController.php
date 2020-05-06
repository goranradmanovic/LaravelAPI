<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allorders = Order::all();

        return view('welcome', compact('allorders'));
    }
}
