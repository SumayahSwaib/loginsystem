
@extends('layout')
@section('title','Welcome to Your Website')
    

@section('content')


  <main>
    <h2>Welcome, User!</h2>
    <p>Thank you for visiting our website.</p>
    <button onclick="location.href='{{ route('login') }}'">Login</button>
    <button onclick="location.href='{{ route('register') }}'">Sign Up</button>
  </main>
@endsection


{{-- 
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  <style>
    /* CSS for the page layout and styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    main {
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin-bottom: 20px;
    }
    p {
      margin-bottom: 10px;
    }
    button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  

  
</body>
</html> 
 --}}