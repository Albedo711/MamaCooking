<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
   
    
<div class="box">
    <span class="borderLine"></span>
<form id="login" action="{{ route('login') }}" method="POST" >
    
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    @csrf
    <h2>Sign in</h2>
    <div class="input-box">
    <input type="text" name="email"  required>
    <span>email</span>
    <i></i>
    </div>

    <div class="input-box">
    <input type="password" name="password"  required>
    <span>Password</span>
    <i></i>
    </div>

    <div class="link">
        <input type="checkbox" name="" id="">
        <p>remember password</p>
        <a href="#">Forgot Password</a>
       
    </div>


    <input type="submit" value="Login">
    <br>
    <div class="link_suki">
 don't have account?
    <a href="register">Sign up</a>
    </div>
</form>
</div>
</body>
</html>
