@extends('layouts.app')
@section('content')
    <!-- <?php // dd($data); ?> -->

    <label style="float: left;">{{$data->name}}<label><br>
    <div id="price" style="margin-left: 38px; margin-top: -22px; float: left;
      "><h4>Price: <s>{{$data->price}}</h4></div><br>
    <div style="text-decoration: line-through; margin-left: -75px; float: left; margin-top: 5px;">
      <span class="price-before-discount">Rs.{{$data->special_price}}</span>
    </div>

    <form action="/cart/store" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{$data->id}}" name="product_id"/>
        <input type="hidden" value="{{$data->name}}" name="name"/>
        <input type="hidden" value="{{$data->price}}" name="price"/>
        <input type="hidden" value="1" name="quantity"/>
        <input type="submit" value="Buy" class="btn btn-primary" name="submit"/>
    </form>
@endsection
