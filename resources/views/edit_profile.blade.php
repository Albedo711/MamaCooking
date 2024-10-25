<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/css_edit.css') }}">
</head>
<body>

<div class="container">
    <div class="admin-product-form-container">
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <h3>Edit Profile</h3>

          
            <input type="text" placeholder="Masukkan Nama" name="name" class="box" value="{{ old('name', $user->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

          
            <input type="password" placeholder="Masukkan sandi baru" name="password" class="box">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            
            <input type="password" placeholder="Masukkan ulang sandi baru" name="password_confirmation" class="box">

            
            <label for="profile_photo">Foto Profile</label>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="profile_photo" class="box">
            @error('profile_photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror

           
            <input type="submit" value="Edit Profile" class="btn">
            <a href="{{ route('index') }}" class="btn">Kembali</a>
        </form>
    </div>
</div>

</body>
</html>
