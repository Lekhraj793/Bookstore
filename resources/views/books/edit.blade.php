@extends('layouts.app')
@section('content')
<?php// dd($find);?>
<div class="container">
    <form method="POST" action="/update/{{$find->id}}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label id="text">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$find->name}}" placeholder="Enter Product Name">
        </div><br>
        <div class="form-group">
            <label id="text">Description:</label>
            <input type="text" class="form-control" name="description" value="{{$find->description}}" placeholder="Enter manufacturer name">
        </div><br>
        <div class="form-group">
            <label id="text">Price:</label>
            <input type="text" class="form-control" name="price" value="{{$find->price}}" placeholder="Price">
        </div><br>
        <div class="form-group">
            <label id="text">Special Price:</label>
            <input type="text" class="form-control" name="special_price" value="{{$find->special_price}}" placeholder="Enter Special Price">
        </div><br>
        <div class="form-group">
            <label id="text">Quantity:</label>
            <input type="number" class="form-control" name="quantity" value="{{$find->quantity}}" placeholder="quantity">
        </div><br>
        <!-- <div class="form-group">
            <input type="hidden" class="form-control" name="admin_id" value="{{$find->admin_id}}" placeholder="quantity">
        </div><br> -->


        <input type="submit" name="submit" value="update" class="btn btn-primary" style="width: 300px; float: right; margin-right: 109px; margin-bottom: 20px;">
    </form>
</div>
@endsection
