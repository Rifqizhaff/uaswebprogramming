@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 20px; padding: 100px;">
    <div class="row justify-content-center">
        <div class="col-4 col-lg-4">
            <div class="card" style="width: 500px; height: 500px; border-radius: 18px">
                <div class="container-fluid" style="margin-top: 40px">
                    <h1 style="justify-content: center; text-align: center; margin-bottom: 50px">Login</h1>
                    <form action="login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Login</button>
                        <br>
                        <small>Not registered? <a href="{{ route('register') }}">Register now!</a></small>
                    </form>
                </div>
        
            </div>
            
        </div>
    </div>
</div>

@endsection