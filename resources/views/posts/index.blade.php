<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
  <header class="header">
    <div class="profile">
      <a href='recipe' class="button-hayyuk">Kembali</a>
      <a href="{{ route('logout') }}" class="button-hayyuk">Logout</a>
    </div>
    <div class="img-hero">
    <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo">
      <h1>{{ $userName }}</h1>
      <a class="button-hayyuk" href="profile/edit">Edit</a>
      <a class="button-hayyuk" href="{{ route('posts.create') }}">Create Recipe</a>
    </div>
  </header>

  <div class="meal-list" id="mealList">
    @foreach ($posts as $post)
    <div class="meal-item" data-recipe-id="{{ $post->id }}" data-bahan="{{ $post->Bahan }}" data-tutorial="{{ $post->Tutorial }}">
    <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
    <h3>{{ $post->title }}</h3>
    <h3>{{ $post->category }}</h3>
    <div class="row g-3">
        <button type="button" class="btn btn-outline-primary read-more-btn">Read More</button>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-warning">Edit</a>
        <button type="button" class="btn btn-outline-danger delete-btn" data-id="{{ $post->id }}">Hapus</button>

    </div>
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
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const postId = this.getAttribute('data-id');
            const confirmation = confirm('Apakah Anda yakin ingin menghapus resep ini?');
            if (confirmation) {
                
                fetch(`/posts/${postId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                })
                .then(response => {
                    if (response.ok) {
                        
                        location.reload();
                    } else {
                        alert('Terjadi kesalahan saat menghapus resep.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghapus resep.');
                });
            }
        });
    });
});
</script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const readMoreButtons = document.querySelectorAll('.meal-item .read-more-btn');
    const modal = new bootstrap.Modal(document.getElementById('recipeModal'));

    readMoreButtons.forEach(button => {
        button.addEventListener('click', function () {
            const mealItem = this.closest('.meal-item');
            const recipeTitle = mealItem.querySelector('h3').textContent;
            const recipeImage = mealItem.querySelector('img').src;
            const recipeBahan = mealItem.getAttribute('data-bahan');
            const recipeTutorial = mealItem.getAttribute('data-tutorial');

            document.getElementById('recipeModalLabel').textContent = recipeTitle;
            document.getElementById('recipeImage').src = recipeImage;

            const ingredientsElement = document.getElementById('recipeBahan');
            ingredientsElement.innerHTML = ''; 
            const sanitizedBahan = recipeBahan
                .replace(/<\/?[^>]+(>|$)/g, "")
                .replace(/&nbsp;/g, "")
                .trim();

            const bahanArray = sanitizedBahan.split(',');
            const bahanList = bahanArray.map((ingredient, index) => `<li>${index + 1}. ${ingredient.trim()}</li>`).join('');
            ingredientsElement.innerHTML = `<ul>${bahanList}</ul>`;

            const tutorialElement = document.getElementById('recipeTutorial');
            tutorialElement.innerHTML = ''; 
            const sanitizedTutorial = recipeTutorial.replace(/<\/?script[^>]*>/g, "").trim(); 
            tutorialElement.innerHTML = sanitizedTutorial; 

            modal.show();
        });
    });
});
</script>
</body>
</html>
