@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

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
                            <th>Special Price:</th>
                            <th>Quantity:</th>
                            <th>Create Date:</th>
                          </tr>
                        </thead>

                        <tbody>
<!-- <?php //dd($profile); ?> -->
                          @foreach ($profile as $save)

                              <tr style="font-size: 15px;">
                                  <td>{{$save['id']}}</td>
                                  <td>{{$save['name']}}</td>
                                  <td>{{$save['special_price']}}</td>
                                  <td>{{$save['quantity']}}</td>
                                  <td>{{$save['created_at']}}</td>
                              </tr>
                          @endforeach
                        </tbody>

                     </table>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
