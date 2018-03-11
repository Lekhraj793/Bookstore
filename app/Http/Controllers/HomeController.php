<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\OrderLibrary;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data= new OrderLibrary();
      $profile= $data->profile();
    //  dd($profile);die;
      return view('/home', compact('profile'));
    }
}
