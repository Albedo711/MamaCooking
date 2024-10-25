document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('modal');
  const closeModal = document.getElementById('closeModal');
  const recipeButtons = document.querySelectorAll('.btn-recipe');
  const modalImage = document.querySelector('.recipe-image');
  const modalTitle = document.querySelector('.recipe-title');
  const modalCategory = document.querySelector('.recipe-category');
  const modalInstructions = document.querySelector('.recipe-instruct p');
  const searchInput = document.getElementById('searchInput');
  const searchButton = document.getElementById('searchButton');
  const mealList = document.getElementById('mealList');
  const loginButton = document.getElementById('loginButton');

  const recipes = [
      {
          id: 0,
          image: "{{ asset('/storage/posts/'.$post->image) }}",
          title: "Nasi goreng",
          category: "Main Course",
          instructions: "1. Panaskan minyak di wajan. 2. Tumis bawang putih dan bawang merah hingga harum. 3. Masukkan nasi putih, aduk rata. 4. Tambahkan kecap manis, garam, dan merica. 5. Aduk hingga semua bahan tercampur sempurna. 6. Sajikan dengan irisan mentimun dan tomat."
      },
      
  ];

  function displayRecipes(recipesToDisplay) {
      mealList.innerHTML = '';
      recipesToDisplay.forEach(recipe => {
          const mealItem = document.createElement('div');
          mealItem.classList.add('meal-item');
          mealItem.setAttribute('data-recipe-id', recipe.id);

          const mealImg = document.createElement('img');
          mealImg.src = recipe.image;
          mealImg.alt = recipe.title;

          const mealTitle = document.createElement('h3');
          mealTitle.textContent = recipe.title;

          const recipeButton = document.createElement('button');
          recipeButton.classList.add('btn-recipe');
          recipeButton.textContent = 'Pelajari';
          recipeButton.addEventListener('click', () => {
              modalImage.src = recipe.image;
              modalTitle.textContent = recipe.title;
              modalCategory.textContent = recipe.category;
              modalInstructions.textContent = recipe.instructions;
              modal.style.display = 'block';
          });

          mealItem.appendChild(mealImg);
          mealItem.appendChild(mealTitle);
          mealItem.appendChild(recipeButton);
          mealList.appendChild(mealItem);
      });
  }

  function performSearch() {
      const searchTerm = searchInput.value.toLowerCase();
      const filteredRecipes = recipes.filter(recipe => 
          recipe.title.toLowerCase().includes(searchTerm)
      );
      displayRecipes(filteredRecipes);
  }

  displayRecipes(recipes);

  searchButton.addEventListener('click', performSearch);

  searchInput.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') {
          performSearch();
      }
  });

  closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  });
});
