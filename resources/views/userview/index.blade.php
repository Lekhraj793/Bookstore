@extends('welcome')
@section('content')

<div class="container-fluid" style="margin-top:70px;">

  <table class="table table-striped table-dark table table-bordered">
    <thead style="font-size: 20px; font-family: -webkit-pictograph;">
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Special Price</th>
        <th>Description</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($books as $book)
      <tr style="font-size: 15px;">
          <td><a href="/cart/{{$book->id}}">{{$book->name}}<label></a></td>
          <td><s>{{$book->price}}</s></td>
          <td>Rs.{{$book->special_price}}</td>
          <td>{{$book->description}}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
</div>
