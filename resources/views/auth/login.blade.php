@extends('layouts.app_login')

@section('content')
<div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-group">
                <div class="form-label-group">
                  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me">
                     Rappel du mot de passe
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>
            </form>
            <div class="text-center">

            </div>
          </div>
        </div>
      </div>
@endsection
