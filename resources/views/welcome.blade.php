@extends('layouts.guest')
@section('content')

    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4 p-0" style="box-shadow:0 4px 5px rgba(0,0,0,0.5)">
                    <div class="logo border border-danger mb-0" style="background-color: #1EA69A;">
                        <img src="{{ asset('images/itts_logo.png') }}" alt="" class="p-4">
                    </div>
                    <form class="yourform" action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="heading">Admin Login</h3>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-itts" value="login" />
                    </form>
                    @error('username')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
