<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep</title>
    <link rel="stylesheet" href="{{ asset('css/resep.css') }}">
</head>
<body>
    <header>
        <div class="search">
            <input type="text" id="searchInput" placeholder="Cari resep">
            <button id="searchButton">Search</button>
        </div>
        <h1>Explore recipes</h1>
        <button class="login-button" id="loginButton">
           <a href="profile"><img src="assets/suki.jpg" alt="Login"></a>
        </button>
    </header>


    
        
    <div class="meal-list" id="mealList">
        <div class="meal-item" data-recipe-id="0">
            <img src="https://i.pinimg.com/originals/18/d9/99/18d999d97240c26feb8475524bec0ec6.png" alt="Nasi goreng">
            <h3>Nasi goreng</h3>
            <button class="btn-recipe">Pelajari</button>
        </div>

        <div class="meal-item" data-recipe-id="1">
            <img src="https://tse3.mm.bing.net/th?id=OIP.wApDfF7uvb2wAcCy8UUHPwHaE8&pid=Api&P=0&h=220" alt="Ayam goreng">
            <h3>Ayam goreng</h3>
            <button class="btn-recipe">Pelajari</button>
        </div>
    </div>

    <div class="modal-container" id="modal">
        <button class="close-button" id="closeModal">&times;</button>
        <div class="meal-details-content">
            <img class="recipe-image" src="" alt="Recipe Image">
            <h2 class="recipe-title">Recipe Title</h2>
            <p class="recipe-category">Category</p>
            <div class="recipe-instruct">
                <h3>Instructions:</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
