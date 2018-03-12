<?php

namespace App\Http\Controllers;

use App\Libraries\orderLibrary;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function __construct(User $user)
    {
        $this->middleware('auth')->except('index');
            if(isset($this->user) && $this->user->is_admin==0)
            {
                return redirect('/cart');

            }
            //return $next($request);
    }

// This function Show Index page for user. Show All Items on homepage.
    public function index()
    {
        try{
          $data= new OrderLibrary();
          $books=$data->homepage();
          return view('userview/index', compact('books'));
        }
        catch(\Exception $e){
            Log::info("Cart is Empty". $e->getMessage());
        }
    }


    public function show(Request $request)
    {
        $saved= Auth::user()->id;
        $data= Book::find($request->id);
        return view('userview/cart', compact('data','saved'));
    }

// This function store item in order table
    public function store(Request $request)
    {
        try{
          $int= new OrderLibrary();
          $save=$int->add($request);
          //dd($save);die;
          return redirect('/home');
        }
        catch(\Exception $e){
            Log::info("Data Not Buy".$e->getMessage());
        }
    }
}
