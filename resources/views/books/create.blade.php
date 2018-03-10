@extends('layouts.app');
@section('content')
<div class="container">
    <form method="post" action="/dashboard" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label id="text">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
        </div><br>
        <div class="form-group">
            <label id="text">Description:</label>
            <input type="text" class="form-control" name="description" placeholder="Enter manufacturer name">
        </div><br>
        <div class="form-group">
            <label id="text">Price:</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div><br>
        <div class="form-group">
            <label id="text">Special Price:</label>
            <input type="text" class="form-control" name="special_price" placeholder="Enter Special Price">
        </div><br>
        <div class="form-group">
            <label id="text">Quantity:</label>
            <input type="number" class="form-control" name="quantity" placeholder="quantity">
        </div><br>
        <!-- <div class="form-group">
            <label id="text">Admin:</label>
            <input type="text" class="form-control" name="admin_id" placeholder="weight">
        </div><br> -->


        <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="width: 300px; float: right; margin-right: 109px; margin-bottom: 20px;">
    </form>
</div>
@endsection
