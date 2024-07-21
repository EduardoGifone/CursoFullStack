// Eventos

console.log(1);

window.addEventListener("load", () => { // load espera a que el JS y los archivos que dependen del HTML esten listos
  console.log(2);
});

window.onload = () => {
  console.log(3);
};

document.addEventListener("DOMContentLoaded", () => { // DOMContentLoaded solo espera a que el HTML este listo
  console.log(4);
});

console.log(5);

window.onscroll = () => {
  console.log("Scrolling...");
};


// Seleccionar elementos y asociarles un evento

// const btnEnviar = document.querySelector(".boton--primario");
// btnEnviar.addEventListener("click", (evento) => {
//   console.log(evento);
//   evento.preventDefault();

//   console.log("Enviando formulario ...");
// });


// Eventos de los inputs y textarea

const datos = {
  nombre: "",
  email: "",
  mensaje: ""
};

const nombre = document.querySelector("#nombre");
const email = document.querySelector("#email");
const mensaje = document.querySelector("#mensaje");
const formulario = document.querySelector(".formulario");

// nombre.addEventListener("input", (e) => { // change = no tiempo real // input = tiempo real
//   console.log(e.target.value);
// });

nombre.addEventListener("input", leerTexto);
email.addEventListener("input", leerTexto);
mensaje.addEventListener("input", leerTexto);


// Evento submit

formulario.addEventListener("submit", (e) => {
  e.preventDefault();

  // Validar formulario
  const {nombre, email, mensaje} = datos;
  
  if (nombre === "" || email === "" || mensaje === "") {
    mostrarAlerta("Todos los campos son obligarios", true);
    return; // Corta la ejecucion del codigo
  }

  // Enviar formulario
  mostrarAlerta("Tus datos fueron enviados correctamente")

});

// Leer texto de campos de datos
function leerTexto(e){
  datos[e.target.id] = e.target.value; 
  console.log(datos);
};

// Alerta refactorizada
function mostrarAlerta(mensaje, error = false) {
  const alerta = document.createElement("P");
  alerta.textContent = mensaje;

  if (error) alerta.classList.add("error");
  else alerta.classList.add("correcto");

  formulario.appendChild(alerta);

  setTimeout(() => alerta.remove(), 3000);
};

// // Muestra un error
// function mostrarError(mensaje) {
//   const error = document.createElement("P");
//   error.textContent = mensaje;
//   error.classList.add("error");

//   formulario.appendChild(error);

//   // Eliminar error
//   setTimeout(() => {
//     error.remove();
//   }, 3000);
// }

// // Muestra una confirmacion
// function mostrarConfirmacion(mensaje) {
//   const correcto = document.createElement("P");
//   correcto.textContent = mensaje;
//   correcto.classList.add("correcto");

//   formulario.appendChild(correcto);

//   // Eliminar correcto
//   setTimeout(() => {
//     correcto.remove();
//   }, 3000);
// }