@extends('layouts.app')

@section('content')
<div class="">
    <section id="header">
        <section id="login">
            <div class="container"> <!-- Normal container -->
                <div class="row align-items-center min-vh-100"> <!-- Vertical center -->

                    <!-- Left Side Image -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="p-3 pl-5">
                            <img style="max-width: 500px;" src="{{ asset('admin.png') }}" alt="Login Image"
                                class="img-fluid  rounded-4 w-100">
                        </div>
                    </div>

                    <!-- Right Side Login Form (centered) -->
                    <div class="col-md-6 d-flex justify-content-center">
                        <form class="login-form p-5 rounded-4 w-100" method="POST" action="{{ route('admin.login.post') }}" style="max-width: 700px;">
                            @csrf
                            <h2 class="mb-4 font-style text-center">Admin Login</h2>

                            <div class="form-group my-3">
                                <label for="email" class="py-2">Email Address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="password" class="py-2">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password"
                                    placeholder="Enter password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="text-center my-3">
                                <button type="submit" class="btn btn-outline-dark btn-block"
                                    style="width: 200px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </section>
</div>
@endsection
