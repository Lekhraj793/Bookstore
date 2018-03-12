<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrderLibrary
{
    public function homepage()
    {
        return Book::all();
    }

    public function show(Request $request, User $user)
    {
        $show= Book::find($request->id);
        $user= User::find($user->id);
        return $show;
        return $user;
    }

    public function add(Request $request)
       {
           $int= Order::create(request()->all());

           return $int;
       }

       public function profile($user_id)
       {
            $saved= Order::select('*')->where('user_id', '=', Auth::id())->get();
           //dd($saved);die;
            return $saved;
       }
}
