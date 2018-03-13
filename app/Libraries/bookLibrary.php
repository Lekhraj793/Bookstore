<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookLibrary
{
  // This function use for insert data
    public function insert(Request $request)
    {
        $int= Book::create(request()->all());
        if(!empty($int)){
          return $int;
        }
        else {
            throw new \Exception("Data Not Insert");

        }
    }

    // This function show all data on dashboard
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
      $updateQuantity= Book::where('id'=>$request->id)->update('quantity' => request(quantity - orders.quantity));
//      UPDATE books SET quantity = (quantity - 1) WHERE (ID = 1)
    }
}
