<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
  <style>
    /* :root { 
    --green: #27ae60;
    --black: #333;
    --white: #fff;
    --bg-color: #eee;
    --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    --border: .1rem solid var(--black);
    --red: #e74c3c; /* Warna merah untuk tombol */
  /* } */
  
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
  }
  header {
    background:url(https://media.licdn.com/dms/image/D4E16AQFSnSXI8820qA/profile-displaybackgroundimage-shrink_200_800/0/1700891887591?e=2147483647&v=beta&t=IJX6DlaqOAE_Ze7ynhBiyJaOF1EZT21ho4-fZ3wBtaY);
    background-size: cover;
    color: black;
    text-align: center;
    height: 370px;
  }
  
  header h1 {
    margin: 0;
    color: white;
    padding: 7rem;
  }
  
  .profile {
    position: relative;
    bottom: 10rem;
    display: flex;
    justify-content: start;
    align-items: center;
    gap: 10px;
    padding: 4.5rem; 
  }
  .img-hero {
  display: flex;
  justify-content: center;
}


 .img-hero img {
  width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 100%;
    margin: -360px;

}
  
  .profile-initial {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    color: red;
    border-radius: 50%;
    font-size: 1.5rem;
  }
  
  .profile-details {
    display: flex;
    flex-direction: column;
  }
  
  .profile-details span {
    font-size: 0.9rem;
    color: white;
  }
  .btn_back{
    margin: 120px;
    cursor: pointer;
    border-radius: .5rem;
    background: black;
    color: pink;
    text-decoration: none;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    transition: cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
  }
  
  .btn-buat{
    cursor: pointer;
    border-radius: .5rem;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    margin-left: 1500px;
    margin: -110px;
    position: absolute;
    background:black;
    color: pink;
    text-decoration: none;
    transition: cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
  }
  .btn {
    
    cursor: pointer;
    border-radius: .5rem;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    margin-left: 1500px;
    margin:-176px;
    position: absolute;
    background:black;
    color: pink;
    text-decoration: none;
    transition: cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
  }
  .btn:hover{
    background-color: pink;
    color: black;
  }
  .btn_logout{
    cursor: pointer;
    border-radius: .5rem;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    margin-left: 870px;
    justify-content: right;
    background-color: black;
    color: pink;
    text-align: center;
    text-decoration: none;
    transition: cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
  }
  .btn_logout:hover{
    background-color: pink;
    color: black;
  }
  
  
  .btn_back:hover{
    background-color: pink;
    color: black;
  }

  .container {
    max-width: 1000px;
    margin: 0 auto;
  }
  
  .main {
    padding: 20px;
  }
  
  .news {
    margin-top: 100px; /* Adjusted to account for fixed header */
  }
  
  .news h2 {
    font-size: 2rem;
    display: flex;
    justify-content: center;
  }
  
.news h3 {
  color: white;
}

  .news-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    gap: 40px;
  }
  
  .news-item {
    width: calc(35% - 30px);
    background-color: red;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-decoration: none;
    transition: transform 0.3s ease-in-out;
  }

  .news-item p {
    color: white;
  }
  
  .news-item:hover {
    transform: scale(1.05);
  }
  
  .news-item img {
    width: 100%;
    object-fit: cover;
    margin-bottom: 10px;
  }
  
  .news-content {
    font-size: 16px;
    line-height: 1.5;
  }
  
  .author {
    font-style: italic;
    color: #fff;
  }
  
  .date {
    font-size: 12px;
    color: #fff;
  }
  
  .news-actions {
    margin-top: 10px;
    text-align: right;
  }
  
  .news-actions a {
    display: inline-block;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    margin-left: 10px;
    text-decoration: none;
    color: white;
    transition: background-color 0.3s ease-in-out;
  }
  
  .news-actions a.btn, .news-actions a.btnn, .news-actions a.btn.delete {
    background-color: var(--green);
  }
  
  .news-actions a.btn:hover, .news-actions a.btnn:hover, .news-actions a.btn.delete:hover {
    background-color: var(--black);
  }
  
  .news-actions a.btn.delete {
    background-color: var(--red);
  }
  
  .news-actions a.btn.delete:hover {
    background-color: darkred;
  }
  
  @media (max-width: 768px) {
    .news-container {
      flex-direction: column;
      width: 100%;
    }
  
    .news-item {
      width: 100%;
    }
  }
  
  @media (max-width: 480px) {
    .news-item img {
      height: 150px;
    }
  }
  
  </style>
  <header class="header">
    <div class="profile">
      <a href='recipe' class="btn_back">Kembali</a>
     
      
     
      <a href="home" class="btn_logout">Logout</a>
    </div>
    <div class="img-hero">
      <img src="assets/suki.jpg" alt="" srcset="">  
    
      <a class="btn" href="edit">Edit</a>
      <a class="btn-buat" href="">Create Recipe</a>

    </div>
    
    
  
  </header>

 

         
      
           
        </article>
      </div>
    </section>
  </main>


</body>
</html>
