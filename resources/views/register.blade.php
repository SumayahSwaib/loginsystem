@extends('layout')
@section('title','Please Register')
@section('content')

<h2>Sign Up</h2>
      
    <div class="container">
      <form action="{{ route('register') }}" method="POST">
        {!! csrf_field() !!}
      <input type="text" name="name" id="name" placeholder="Full Name" required>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <input type="submit" value="register" class="btn btn-sucess">
    </form>
  </form>
@endsection
    