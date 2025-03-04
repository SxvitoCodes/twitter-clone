@extends('layouts.layout')

@section('title', 'Log In')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            @include('shared.success-msg')
            <form class="form mt-5" action={{ route('login') }} method="post">
                @csrf
                <h3 class="text-center text-white">Login</h3>
                <div class="form-group mt-3">
                    <label for="email" class="text-white">Email:</label><br>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                        @include('shared.error-msg')
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="text-white">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        @include('shared.error-msg')
                    @enderror
                </div>
                <div class="form-group">
                    <label for="remember-me" class="text-white"></label><br>
                    <input type="submit" name="submit" class="btn btn-outline-success btn-md" value="submit">
                </div>
                <div class="text-right mt-2">
                    <a href="/register" class="text-white">Register here</a>
                </div>
            </form>
        </div>
    </div>
@endsection
