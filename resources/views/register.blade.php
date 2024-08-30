<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    
<div class="box">
    <span class="borderLine"></span>

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
    </div>
@endif



<form id="register" action="{{ route('register') }}" method="POST" >
    @csrf
    <h2>Sign up</h2>
    <div class="input-box">
    <input type="text" name="name"  required>
    <span>Nama lengkap</span>
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
<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000); // 3000 ms = 3 detik
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
