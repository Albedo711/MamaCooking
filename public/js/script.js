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
          image: "https://i.pinimg.com/originals/18/d9/99/18d999d97240c26feb8475524bec0ec6.png",
          title: "Nasi goreng",
          category: "Main Course",
          instructions: "1. Panaskan minyak di wajan. 2. Tumis bawang putih dan bawang merah hingga harum. 3. Masukkan nasi putih, aduk rata. 4. Tambahkan kecap manis, garam, dan merica. 5. Aduk hingga semua bahan tercampur sempurna. 6. Sajikan dengan irisan mentimun dan tomat."
      },
      {
          id: 1,
          image: "https://tse3.mm.bing.net/th?id=OIP.wApDfF7uvb2wAcCy8UUHPwHaE8&pid=Api&P=0&h=220",
          title: "Ayam goreng",
          category: "Main Course",
          instructions: "1. Lumuri ayam dengan bumbu halus. 2. Diamkan selama 30 menit agar bumbu meresap. 3. Panaskan minyak di wajan. 4. Goreng ayam hingga matang dan berwarna kecokelatan. 5. Angkat dan tiriskan. 6. Sajikan dengan nasi putih dan sambal."
      }
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
