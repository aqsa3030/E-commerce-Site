@extends('master')
@section('content')

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4" >

                    <form class="row g-3">
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Email</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="Email">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Password </label>
                          <input type="password" class="form-control" id="inputAddress2" placeholder="Password">
                        </div>
                       
                    
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                </div>
            </div>

    </div>
  </body>
  </html>
@endsection