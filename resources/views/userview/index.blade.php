@extends('welcome')
@section('content')

<div class="container-fluid" style="margin-top:70px;">


          <div class="row" style="float: left; width: 1010px;">
              <div class="col-md-12 blog-main" style="margin-left:20px;">
                  <h3 class="pb-3 mb-4 font-italic border-bottom">
                      From the Firehose
                  </h3>
<!-- <?php //dd($posts) ?> -->
                  @foreach ($books as $book)
            					<a href="/cart/{{$book['id']}}"><label style="float: left;">{{$book->name}}<label></a><br>
            					<div id="price" style="margin-left: 38px; margin-top: -22px; float: left;
            						"><h4>Price: <s>{{$book->price}}</h4></div><br>
            					<div style="margin-left: 200px;; float: left; margin-top: 5px;">
                        <span class="price-before-discount">Rs.{{$book->special_price}}</span>
            					</div>

                  @endforeach

               </div><!-- /.blog-main -->
          </div><!-- /.row -->

</div>
