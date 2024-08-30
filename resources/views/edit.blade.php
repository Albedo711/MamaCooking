<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="{{ asset('css/css_edit.css') }}">
</head>
<body>

<div class="container">
    <div class="admin-product-form-container">
    <form action="" method="post" enctype="multipart/form-data">
   <input type="hidden" name="update_menu" value="1">
   <h3>Edit Profile</h3>
   <input type="text" placeholder="Masukkan Nama" name="nama" class="box">
   <input type="password" placeholder="Masukkan sandi baru" class="box">


   <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" class="box">

   <input type="file" accept="image/png, image/jpeg, image/jpg" name="gambar" class="box">

   <input type="submit" value="Edit Profile" name="" class="btn">
   <a href="profile" class="btn">Kembali!</a>
</form>
    </div>
</div>

</body>
</html>
