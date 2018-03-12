<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\User;

class Order extends Model
{
    protected $fillable=['user_id','book_id','quantity','special_price'];

    public function book()
    {
        return $this->belongsTo(Book::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
