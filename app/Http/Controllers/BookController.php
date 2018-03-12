<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\bookLibrary;
use App\Models\Book;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{

    public function __construct(User $user)
    {

        $this->middleware('auth')->except('show');
          $this->middleware(function ($request, $next) {
              $this->user=Auth::user();
              if(isset($this->user) and $this->user->is_admin==0)
              {
                  return redirect('/');
              }
              return $next($request);
          });

    }

// This function use for open insert data form.
    public function create()
    {
       return view('/books/create');
    }

// This function use for create data. and store in database.
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
            Log::info("Data Not Insert");
        }
    }

//This function show dashboard only for admin
    public function index()
    {
        try{
            $all=new BookLibrary();
            $books=$all->all();
          //dd($books);
          return view('/books/dashboard', compact('books'));
        }
        catch(\Exception $e)
        {
            Log::info("Store is Empty".$e->getMessage());
        }
    }

//This function show edit form for admin.
    public function show(Request $request)
    {
        try{
            $show= new BookLibrary();
            $find=$show->edit($request);
            return view('/books/edit',compact('find'));
        }
        catch(\Exception $e)
        {
            Log::info("Data Not Found".$e->getMessage());
        }
    }

// This function update data.
    public function update(Request $request)
    {
        try{
            $book= new BookLibrary();
            //dd($book);die;
            $data=$book->change($request);
            //dd($data);die;
            if($data){
                return redirect('/dashboard');
          }
        }
        catch(\Exception $e)
        {
            Log::info("Something wrong".$e->getMessage());
        }
    }

// This function remove data form database
    public function remove(Request $request)
    {
        try{
            $del=new BookLibrary();
            $data=$del->delete($request);
            return redirect('/dashboard');
        }
        catch(\Exception $e)
        {
            Log::info('Data Not Delete'.$e->getMessage());
        }
    }
}
