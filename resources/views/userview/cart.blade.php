@extends('layouts.app')
@section('content')

      <!-- <?php  //dd($saved); ?> -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    		<div class="container-fluid">

    <form action="/store" method="post">
      <table class="table table-striped table-dark table table-bordered">
        <tbody>
          <tr style="font-size: 15px;">
              {{ csrf_field() }}
              <input type="hidden" value="{{$saved}}" name="user_id">
              <input type="hidden" value="{{$data->id}}" name="book_id"/>
              <input type="text" value="{{$data->name}}" name="name"/>
              <input type="text" value="{{$data->special_price}}" name="special_price"/>
              <select name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
              <input type="submit" value="Buy" class="btn btn-primary" name="submit"/>
            </tr>
          </tbody>
        </table>
    </form>
@endsection
