<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\bookLibrary;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class BookController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct(Book $book)
    {
        $this->middleware('auth')->except('show');
        $this->middleware(function ($request, $next) {
            $this->user=Auth::user();

            if(isset($this->user) and $this->user->is_admin==0 and Route::current()->uri!="/show/{id}")
            {
                return redirect('/');

            }
            return $next($request);
        });

    }


    public function create()
    {
       return view('/books/create');
    }

    public function store(Request $request)
    {
        try
        {
            $data=new BookLibrary();
            $set=$data->add($request);
              //dd($set);die;
            return redirect('/dashboard');
        }
        catch (\Exception $e)
        {
            echo 'Data Not Insert ' .$e->getMessage();
        }
    }

    public function index()
    {
        //  session();
        try{
          $all=new BookLibrary();
          $books=$all->all();
          //dd($books);
          return view('/books/dashboard', compact('books'));
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function show(Request $request)
    {
      try{
        $show= new BookLibrary();
        $find=$show->edit($request);
        return view('/books/edit',compact('find'));
      }
      catch(\Exception $e)
      {
          echo $e->getMessage();
      }
    }

    public function update(Request $request)
    {
      try{
        $book=new BookLibrary();
        $data=$book->change($request);
        return redirect('/dashboard');
      }
      catch(\Exception $e)
      {
          echo "Data Not Update".$e->getMessage();
      }
    }

    public function remove(Request $request)
    {
      try{
        $del=new BookLibrary();
        $data=$del->delete($request);
        return redirect('/dashboard');
      }
      catch(\Exception $e)
      {
          echo "Data Not Delete".$e->getMessage();
      }
    }
}
