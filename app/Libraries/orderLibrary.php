<?php

namespace App\Libraries;
use Illuminate\Http\Request;


use App\Models\Book;

class OrderLibrary
{
    public function homepage()
    {
        return Book::all();
    }

    public function show(Request $request)
    {
        $show= Book::find($request->id);
        return $show;
    }

    // public function store(Request $request)
    // {
    //
    // }
}
