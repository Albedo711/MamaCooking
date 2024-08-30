<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
  <header class="header">
    <div class="profile">
      <a href='recipe' class="btn_back">Kembali</a>
      <h1>Hallo,{{$nama}}</h1>
      
     
      <a href="home" class="btn_logout">Logout</a>
    </div>
    <div class="img-hero">
      <img src="assets/suki.jpg" alt="" srcset="">  
    
      <a class="btn" href="edit">Edit</a>
    </div>
    
    
  
  </header>

 

         
      
           
        </article>
      </div>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>
