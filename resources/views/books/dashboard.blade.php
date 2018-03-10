@extends('layouts.app')
@section('content')
		<div class="container">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    		<div class="container-fluid">

 					          <header>
                      	<h1>Welcome to admin panel</h1>
                    </header>

      <table class="table table-striped table-dark table table-bordered">
        <thead style="font-size: 20px; font-family: -webkit-pictograph;">
          <tr>
            <th>Book No:</th>
            <th>Book Name:</th>
            <th>Price:</th>
            <th>Special Price:</th>
            <th>Quantity:</th>
            <th>Create Date:</th>
          </tr>
        </thead>

        <tbody>
<!-- <?php// dd($books); ?> -->
          @foreach ($books as $book)

              <tr style="font-size: 15px;">
                  <td>{{$book['id']}}</td>
                  <td>{{$book['name']}}</td>
                  <td>{{$book['price']}}</td>
                  <td>{{$book['special_price']}}</td>
                  <td>{{$book['quantity']}}</td>
                  <td>{{$book['created_at']}}</td>
                  <td><a href="/edit/{{$book['id']}}" class="btn btn-primary" style="width: 65px;">Edit</a></td>
                  <td><a href="/delete/{{$book['id']}}" class="btn btn-danger" style="width: 65px;">Delete</a></td>
              </tr>
          @endforeach
        </tbody>
        <h3><a href="books/create" class="btn btn-primary">Insert New Book</a><h3>
     </table>

  </div>

@endsection
