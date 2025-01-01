@extends('components.main')
@section('title')
<title>Ro'yhatdan O'ting</title>
@endsection
@section('content')
<style>
        .signup-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555555;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #45a049;
        }
        .signup-container p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .signup-container p a {
            color: #4CAF50;
            text-decoration: none;
        }
        @media screen and (min-width: 1024px){
          .signup-container{
            margin-top: 50px;
            margin-left: 40%;
            margin-bottom: 60px;
          }
        }
        @media screen and (min-width: 300px) and (max-width: 1900px){
          .signup-container{
            margin-left: 50px;
          }
        }
    </style>
@if(!session('username')){
<div class="signup-container">
        <h2>Signup</h2>
        <form action="signup/create" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Foydalanuvchi Ismi</label>
                <input type="text" id="username" name="name" placeholder="Ismi Familyangizni yozing" required>
            </div>
            <div class="form-group">
                <label for="email">Foydalanuvchi Nomi</label>
                <input type="username" id="email" name="username" placeholder="Foydalanuvchi Nomingizni Yarating" required>
            </div>
            <div class="form-group">
                <label for="password">Email</label>
                <input type="email" id="email" name="email" placeholder="emailingizni kiriting" required>
            </div>
            <div class="form-group">
                <label for="password">Telefon Raqam</label>
                <input type="number" id="phone" name="number" placeholder="Telefon Raqam 901234563 ko'rinishida" required>
            </div>
            <div class="form-group">
                <label for="password">Parol</label>
                <input type="password" id="email" name="password" placeholder="Parolingizni Kiriting" required>
            </div>

            <button class="button" type="submit">Sign Up</button>
            <p style="color:red">{{ $error }}</p>
            <p>Already have an account? <a href="/login">Login here</a></p>
        </form>
    </div>
@endif
@endsection
