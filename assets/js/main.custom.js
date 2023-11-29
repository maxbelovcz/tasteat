const dishesButton = document.querySelector('.popular-dishes__see-all-button');
const dishesButtonHide = document.querySelector('.popular-dishes__button-hidden');
const dishesItem = document.querySelectorAll('.popular-dishes__item');

if (dishesButton && dishesButtonHide) {
    function hiddenItems() {
        if (dishesButton.classList.contains('active') && dishesItem.length > 0) {
            for (let e = 4; e < dishesItem.length; e++) {
                dishesItem[e].classList.add('popular-dishes__item--hidden');
            }
        }
    }

    hiddenItems();

    dishesButton.addEventListener("click", () => {
        dishesButton.classList.remove('active');
        dishesButton.classList.add('hidden');
        dishesButtonHide.classList.add('active');
        dishesItem.forEach((e) => {
            e.classList.remove('popular-dishes__item--hidden');
        });
    });

    dishesButtonHide.addEventListener("click", () => {
        dishesButton.classList.remove('hidden');
        dishesButton.classList.add('active');
        dishesButtonHide.classList.remove('active');
        hiddenItems();
    });
}

