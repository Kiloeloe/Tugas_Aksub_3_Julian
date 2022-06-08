@extends('layouts/app')

@section('title','Register')

@section('content')
    <h1 class ="container">Register</h1>
    <hr>

    <div class="container mt-5">
        <div class="col-md-7 p-3 rounded form-back">
            <form action="/register" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <input type="Email" name = "email" placeholder="Enter your email address"class="form-control">
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name = "username" placeholder="Enter your username"class="form-control">
                    @error('username')<span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" name = "phone" placeholder="Enter your phone number"class="form-control">
                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name = "password" placeholder="Enter you password"class="form-control">
                    @error('password')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name = "password_confirmation" placeholder="Confirm password"class="form-control">
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
@endsection
