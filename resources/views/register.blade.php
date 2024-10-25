<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
</head>
<body>


    
<div class="box">
    <span class="borderLine"></span>
<form id="register" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    
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
    <h2>Sign up</h2>
    <div class="input-box">
    <input type="text" name="name"  required>
    <span>Nama lengkap</span>
    <i></i>
    </div>

    <div class="input-box">
    <label>GAMBAR</label>
    <input type="file" name="profile_photo" required>
    <i></i>
    </div>

    <div class="input-box">
    <input type="text" name="email"  required>
    <span>Email</span>
    <i></i>
    </div>

    <div class="input-box">
    <input type="password" name="password"  required>
    <span>Password</span>
    <i></i>
    </div>

    <div class="input-box">
    <input type="password" name="password"  required>
    <span>Ulangi Password</span>
    <i></i>
    </div>
    <div class="link">
        <input type="checkbox" name="" id="">
        <p>remember password</p>
        <a href="#">Forgot Password</a>
       
    </div>
    <input type="submit" value="Register">
    <br>
    <div class="link_suki">
    don't have an account
    <a href="login">Sign in</a>
    </div>
</form>
</div>



</body>
</html>
