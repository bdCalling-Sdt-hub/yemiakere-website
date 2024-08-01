@extends('master')

@section('title')
    Login | Login
@endsection

@section('content')

    <div class="sign-up-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <form action="{{ url('login') }}" method="POST"  >
                        @csrf
                        <div class="title">
                            <h1>Log In</h1>
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
                            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
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

{{--<section class="login-form">--}}
{{--    <h1>Login</h1>--}}

{{--    <!-- Display Validation Errors -->--}}
{{--                            @if ($errors->any())--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    <ul>--}}
{{--                                        @foreach ($errors->all() as $error)--}}
{{--                                            <li>{{ $error }}</li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <!-- Display Custom Error Messages -->--}}
{{--                            @if (session('error'))--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    {{ session('error') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--    <form action="{{ url('login') }}" method="post">--}}
{{--        @csrf--}}
{{--        <label for="username">Username:</label>--}}
{{--        <input type="text" id="username" name="username" required>--}}
{{--        <label for="password">Password:</label>--}}
{{--        <input type="password" id="password" name="password" required>--}}
{{--        <button type="submit" class="btn">Login</button>--}}
{{--    </form>--}}
{{--</section>--}}

@endsection
