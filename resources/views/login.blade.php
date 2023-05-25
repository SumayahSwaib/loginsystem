@extends('layout')
@section('title','login')
@section('content')
    <div class="container">
        <form action="{{ route('check') }}" method="POST"  id="login-form">
          {!! csrf_field() !!}
          <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
          </form>
    </div>
@endsection
    


{{-- <form id="login-form">
    <h2>Login</h2>
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Password" required>
    <input type="submit" value="Login">
  </form>

  <form id="signup-form">
    <h2>Sign Up</h2>
    <input type="text" placeholder="Full Name" required>
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Password" required>
    <input type="submit" value="Sign Up">
  </form>
 --}}