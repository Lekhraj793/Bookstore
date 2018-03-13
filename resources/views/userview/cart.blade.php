@extends('layouts.app')
@section('content')

      <!-- <?php  //dd($saved); ?> -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    		<div class="container-fluid">

    <form action="/store" method="post">
      <table class="table table-striped table-dark table table-bordered">
        <thead style="font-size: 20px; font-family: -webkit-pictograph;">
          <tr>
            <th hidden>user_id</th>
            <th hidden>Book_id</th>
            <th>Name</th>
            <th>Special Price:</th>
            <th>Quantity:</th>
          </tr>
        </thead>

        <tbody>
          <tr style="font-size: 15px;">
              {{ csrf_field() }}
              <input type="hidden" value="{{$saved}}" name="user_id">
              <input type="hidden" value="{{$data->id}}" name="book_id"/>
              <td><input type="text" value="{{$data->name}}" name="name"/></td>
              <td><input type="text" value="{{$data->special_price}}" name="special_price"/></td>
              <td><select name="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select></td>
              <td><input type="submit" value="Buy" class="btn btn-primary" name="submit"/></td></td>
            </tr>
          </tbody>
        </table>
    </form>
@endsection
