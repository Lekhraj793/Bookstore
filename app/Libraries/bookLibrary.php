<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Book;

class BookLibrary
{
    public function add(Request $request)
    {
        $int= Book::create(request()->all());
        return $int;
    }

    public function all()
    {
      return Book::all()->toArray();
    }

    public function edit(Request $request)
    {
        $show= Book::find($request->id);
        return $show;
    }

    public function change(Request $request)
    {
        $book=Book::find(request('id'));
        dd($book);die;
        $book->fill($request->all())->save();

        return $book;

    }

    public function delete(Request $request)
    {
        $del=Book::destroy($request->id);
        return $del;
    }


    public function updateQuantity()
    {
        
    }
}
