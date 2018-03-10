<?php

namespace App\Http\Controllers;
use App\Libraries\orderLibrary;
use Illuminate\Http\Request;
use App\Models\Book;
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
        $data= Book::find($request->id);
        return view('books/cart', compact('data'));
    }

    public function store(Request $request)
    {
        if (Auth::guard('user')->check())
        {
           echo "Logged in via manager guard";
        }
    }
}
