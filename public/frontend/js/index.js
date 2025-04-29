
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



