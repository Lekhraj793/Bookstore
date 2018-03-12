<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookLibrary
{
    public function add(Request $request)
    {
        $int= Book::create(request()->all());
        if(empty($int)){
          return $int;
        }
        else {
            echo "Data Not Insert";
        }
    }

    public function all()
    {
      return Book::all()->toArray();
    }

    public function edit(Request $request)
    {
        $show= Book::find($request->id);
        if (!empty($show)) {
            return $show;
        }
        else{
            echo "Data Not Found";
        }
    }

    public function change(Request $request)
    {
        $book= Book::find(request('id'));
        $book->name = request('name');
        $book->description = request('description');
        $book->price = request('price');
        $book->special_price = request('special_price');
        $book->quantity = request('quantity');
        $book->admin_id = request('admin_id');
        $book->save();
        //dd($book);die;
         return $book;

    }

    public function delete(Request $request)
    {
        $del=Book::destroy($request->id);
        if (!empty($del)) {
          return $del;
        }
        else {
            echo "Data not delete";
        }

    }


    public function updateQuantity()
    {

    }
}
