// script.js
document.getElementById("search-button").addEventListener("click", function () {
     const searchBox = document.getElementById("search-box");
     searchBox.classList.toggle("active");
     if (searchBox.classList.contains("active")) {
          searchBox.focus(); // Focus on the search box when it becomes visible
     }
});

