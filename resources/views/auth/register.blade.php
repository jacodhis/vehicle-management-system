@extends('site.app')
@section('title', 'Register')
@section('content')
    <!-- <div class="clearfix bg-blue">
        <div class="container">
            <h2 class="title-page">Register</h2>
        </div>
    </div> -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    <article class="card-body">
                        <form action="{{ route('register') }}" method="POST" role="form">
                            @csrf
                            <div class="form-row"> 
                                <div class="col form-group">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <!-- <div class="form-group">
                                <label for="address">Phone (Optional)</label>
                                <input class="form-control" type="text" name="address" id="address" value="{{ old('address') }}">
                            </div> -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- <label for="city">County</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}"> -->
                                    <label for="address">Phone (Optional)</label>
                                    <input class="form-control" type="text" name="address" id="address" value="{{ old('address') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Country</label>
                                    <select id="country" class="form-control" name="country">
                                        <option> Choose...</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block"> Sign Up </button>
                            </div>
                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Have an account? <a href="{{ route('login') }}">Log In</a></div>
                </div>
            </div>
        </div>
    </section>
@stop
