<?php

namespace App\Http\Controllers;
use App\Libraries\orderLibrary;
use Illuminate\Http\Request;
use App\Models\Book;

use Illuminate\Support\Facades\Auth;
use App\User;

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


    public function index()
    {
        $data= new OrderLibrary();
        $books=$data->homepage();
        return view('userview/index', compact('books'));
    }

    public function show(Request $request)
    {
        $saved= Auth::user()->id;
        $data= Book::find($request->id);
        return view('userview/cart', compact('data','saved'));
    }

    public function store(Request $request)
    {
        $int= new OrderLibrary();
        $save=$int->add($request);
        //dd($save);die;
        return redirect('/home');
    }

    public function profile()
    {

    }
}
