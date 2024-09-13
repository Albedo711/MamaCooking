<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Resep</title>
    <link rel="stylesheet" href="{{ asset('css/buat.css') }}">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

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

            <h2>Buat resep</h2>

            <div class="input-box">
                <input type="text" name="title" id="title" required>
                <span>Title</span>
                <i></i>
            </div>

            <div class="input-box">
                <textarea name="description" id="description" required></textarea>
                <span>Description</span>
                <i></i>
            </div>

            <div class="input-box">
                <input type="file" name="photo" id="photo" accept="image/*">
                <span>Image</span>
                <i></i>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
