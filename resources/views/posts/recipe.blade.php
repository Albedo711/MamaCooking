<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep</title>
    <link rel="stylesheet" href="{{ asset('css/resep.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="search">
            <input type="text" id="searchInput" placeholder="Cari resep">
            <button id="searchButton">Search</button>
        </div>
        <h1>Explore recipes</h1>
        <button class="login-button" id="loginButton">
           <a href="profile"><img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Login"></a>
        </button>
    </header>

    <div class="meal-list" id="mealList">
    @foreach ($posts as $post)
      <div class="meal-item" data-recipe-id="{{ $post->id }}" 
           data-bahan="{{ $post->Bahan }}" 
           data-tutorial="{{ $post->Tutorial }}">
        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
        <h3>{{ $post->title }}</h3>
        <button type="button" class="btn btn-outline-primary">Read More</button>
      </div>
    @endforeach
    </div>
  
    {{ $posts->links() }}

    <div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="recipeModalLabel">Recipe Title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img id="recipeImage" src="" alt="Recipe Image" class="img-fluid rounded">
            <br>
            <br>
            <h6>Bahan:</h6>
            <div id="recipeBahan" style="white-space: pre-line;"></div> 
            <br>
            <h6>Tutorial:</h6>
            <div id="recipeTutorial"></div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const readMoreButtons = document.querySelectorAll('.meal-item .btn');
    const modal = new bootstrap.Modal(document.getElementById('recipeModal'));

    readMoreButtons.forEach(button => {
        button.addEventListener('click', function () {
            const mealItem = this.closest('.meal-item');
            const recipeTitle = mealItem.querySelector('h3')?.textContent || 'Unknown Recipe';
            const recipeImage = mealItem.querySelector('img')?.src || '';
            const recipeBahan = mealItem.getAttribute('data-bahan') || '';
            const recipeTutorial = mealItem.getAttribute('data-tutorial') || '';

            document.getElementById('recipeModalLabel').textContent = recipeTitle;
            document.getElementById('recipeImage').src = recipeImage;

           
            const ingredientsElement = document.getElementById('recipeBahan');
            ingredientsElement.innerHTML = '';
            const sanitizedBahan = recipeBahan
                .replace(/<\/?[^>]+(>|$)/g, "") 
                .replace(/&nbsp;/g, " ") 
                .trim();

            if (sanitizedBahan) {
                const bahanArray = sanitizedBahan.split('\n'); 
                const bahanList = bahanArray.map((ingredient) => 
                    `<li>${ingredient.trim()}</li>`
                ).join('');
                ingredientsElement.innerHTML = `<ul>${bahanList}</ul>`;
            } else {
                ingredientsElement.innerHTML = '<p>Tidak ada bahan tersedia.</p>';
            }

            
            const tutorialElement = document.getElementById('recipeTutorial');
            tutorialElement.innerHTML = '';
            const sanitizedTutorial = recipeTutorial
                .replace(/<\/?script[^>]*>/g, "") 
                .trim();
            tutorialElement.innerHTML = sanitizedTutorial || '<p>Tidak ada tutorial tersedia.</p>';

            modal.show();
        });
    });


    const searchButton = document.getElementById('searchButton');
    const searchInput = document.getElementById('searchInput');

    searchButton.addEventListener('click', function () {
        const query = searchInput.value.toLowerCase().trim();
        const mealItems = document.querySelectorAll('.meal-item');

        mealItems.forEach(item => {
            const title = item.querySelector('h3')?.textContent.toLowerCase() || '';
            if (title.includes(query)) {
                item.style.display = ''; 
            } else {
                item.style.display = 'none'; 
            }
        });
    });

    searchInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            searchButton.click();
        }
    });
});

    </script>

</body>
</html>
