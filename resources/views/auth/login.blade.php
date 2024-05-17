@extends('layouts.app')

<div class="hero bg-general text-center">
    <h1>Login</h1>
</div>
<div class="container mb-5">
    
    <div class="row justify-content-center">
        
        <form action="{{route('login.post')}}" method="POST" class="contact-form bg-white col-12 col-md-6">
            @if($errors->has('login-failed'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{$errors->first('login-failed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @csrf
            <div class="form-group">
                <label class="text-black" for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
                @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="text-black" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>