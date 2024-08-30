<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f0f0f0;
        }
        header {
            background: url(https://media.licdn.com/dms/image/D4E16AQFSnSXI8820qA/profile-displaybackgroundimage-shrink_200_800/0/1700891887591?e=2147483647&v=beta&t=IJX6DlaqOAE_Ze7ynhBiyJaOF1EZT21ho4-fZ3wBtaY);
            background-size: cover;
            color: black;
            text-align: center;
            padding: 20px 20px 80px;
            position: relative;
        }
        h1 {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-top: 80px;
        }
        .search {
            padding-top: 30px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .search input {
            padding: 10px;
            border: none;
            width: 40%;
            font-size: 15px;
            outline: none;
            border-radius: 20px;
        }
        .search button {
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            width: 10%;
            margin-left: 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            background: black;
            color: pink;
            transition: all cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
        }
        .search button:hover {
            background: pink;
            color: black;
        }
        .meal-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px;
        }
        .meal-item {
            flex-basis: calc(25% - 20px);
            max-width: calc(25% - 20px);
            margin: 10px;
            padding: 20px 20px 10px;
            box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2);
            border-radius: 10px;
        }
        .meal-item img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .meal-item h3 {
            text-align: center;
            margin: 10px 0;
            font-size: 17px;
            font-weight: 600;
        }
        .btn-recipe {
            border-radius: 20px;
            padding: 5px;
            cursor: pointer;
            background-color: black;
            color: pink;
            transition: all cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
        }
        .btn-recipe:hover {
            background-color: pink;
            color: black;
        }
        .login-button {
            position: absolute;
            top: 30px;
            right: 30px;
            border: none;
            cursor: pointer;
            background: none;
            border-radius: 50%;
            overflow: hidden;
            width: 70px;
            height: 70px;
        }
        .login-button img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .modal-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            max-width: 90%;
            overflow: auto;
            border-radius: 10px;
        }
        .modal-container .close-button {
            font-size: 42px;
            background: none;
            border: none;
            cursor: pointer;
            color: #333;
            width: 100%;
            text-align: right;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }
        .modal-container .close-button:hover {
            color: pink;
        }
        .meal-details-content {
            overflow-y: auto;
            max-height: 70vh;
        }
        .recipe-title {
            font-size: 22px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 5px;
        }
        .recipe-category {
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 10px;
        }
        .recipe-instruct h3 {
            font-size: 16px;
        }
        .recipe-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
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