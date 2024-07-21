// querySelector
const heading = document.querySelector('.header__texto h2'); // 0 o 1 Elementos
heading.classList.add("nueva-clase");
heading.textContent = "Nuevo Heading";

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a"); // 0 o todos los elementos
enlaces[0].textContent = "Nuevo texto para enlace";
enlaces[0].href = "https://google.com"
enlaces[0].classList.add("nueva-clase");
enlaces[0].classList.remove("navegacion__enlace");

// getElementById

const heading = document.getElementById('heading');
heading.classList.add("nueva-clase");
heading.textContent = "Nuevo Heading";