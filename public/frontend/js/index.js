
function toggleMenu() {
const menu = document.getElementById('menu');
menu.classList.toggle('show');
}

function toggleSearch() {
const box = document.getElementById('search-box');
box.style.display = (box.style.display === 'block') ? 'none' : 'block';
}


document.getElementById("search-button").addEventListener("click", function () {
    document.getElementById("search-box").classList.toggle("active");
});


const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');
    
    stars.forEach((star, idx) => {
        star.addEventListener('mouseover', () => {
            resetStars();
            highlightStars(idx);
        });

        star.addEventListener('click', () => {
            ratingInput.value = star.dataset.value;
            setSelectedStars(idx);
        });

        star.addEventListener('mouseout', () => {
            resetStars();
            const selectedValue = ratingInput.value;
            if (selectedValue) {
                setSelectedStars(selectedValue - 1);
            }
        });
    });

    function highlightStars(index) {
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('hovered');
        }
    }

    function setSelectedStars(index) {
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('selected');
        }
    }

    function resetStars() {
        stars.forEach(star => {
            star.classList.remove('hovered');
            star.classList.remove('selected');
        });
    }

    // default highlight first star
    document.addEventListener('DOMContentLoaded', () => {
        setSelectedStars(0);
    });


$(document).ready(function () {
    $('.review-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1024: { items: 3 }
        }
    });
});
