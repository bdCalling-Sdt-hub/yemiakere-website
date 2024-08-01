@extends('master')

@section('title')
    Sign Up | Sign Up
@endsection


@section('content')

    <div class="sign-up-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <form action="{{ url('register') }}" method="POST"  >
                        @csrf
                        <div class="title">
                            <h1>Sign Up</h1>
                        </div>


                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Display Custom Error Messages -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input name="username" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button onclick="postMessage('Registered')" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


{{--<section class="signup-form">--}}
{{--    <h1>Sign Up</h1>--}}
{{--    <form action="{{ url('register') }}" method="POST">--}}
{{--        @csrf--}}
{{--        <label for="username">Username:</label>--}}
{{--        <input type="text" id="username" name="username" required>--}}
{{--        <label for="email">Email:</label>--}}
{{--        <input type="email" id="email" name="email" required>--}}
{{--        <label for="password">Password:</label>--}}
{{--        <input type="password" id="password" name="password" required>--}}
{{--        <button type="submit" class="btn">Sign Up</button>--}}
{{--    </form>--}}
{{--</section>--}}

@endsection
