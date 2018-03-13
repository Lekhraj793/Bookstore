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

    public function show(Request $request)
    {
      $arr[]=array(array($saved= Auth::user()->id),
              array($data= Book::find($request->id)));
        return $arr;
    }

    public function add(Request $request)
       {
          $int= Order::insert(['user_id' => $request->user_id, 'book_id'=> $request->book_id,
                  'quantity'=>$request->quantity, 'special_price'=>$request->quantity*$request->special_price]);
                  //->decrement('quantity'=>$request->quantity);
           return $int;
       }

// this function view data
       public function profile($user_id)
       {
            $saved= Order::select('*')->where('user_id', '=', Auth::id())->get();
           //dd($saved);die;
            return $saved;
       }
}
