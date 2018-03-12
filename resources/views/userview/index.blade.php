@extends('welcome')
@section('content')

<div class="container-fluid" style="margin-top:70px;">
<!-- <?php //dd($posts) ?> -->

    <div class="container">
      <div class="row">
        @foreach ($books as $book)
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><a href="/cart/{{$book->id}}">{{$book->name}}<label></a></div>
            <div class="panel-body"><s>{{$book->price}}</s></div>
            <div class="panel-footer">Rs.{{$book->special_price}}</div>
          </div>
        </div>
          @endforeach
      </div>
    </div><br><br>
</div>
