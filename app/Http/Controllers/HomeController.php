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
<<<<<<< HEAD
        $this->middleware('auth');
=======
        //$this->middleware('auth');
>>>>>>> Entah apa yang merasukiku
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
<<<<<<< HEAD
=======

    public function refreshCaptcha(){
        return response()->json(['captcha'=> captcha_img('flat')]);
    }
>>>>>>> Entah apa yang merasukiku
}
