"use strict"; // Ejecuta el codigo estricto que siga las buenas practicas

// Objetos

const producto = {
  nombre: "Monitor",
  precio: 300,
  disponible: true
};

// freeze (no permite eliminar, agregar ni modificar)
Object.freeze(producto); // Evita que el objeto puede tener nuevos valores

// seal (no permite eliminar, aniadir pero si modificar)
Object.seal(producto); // Evita que el objeto puede tener nuevos valores


// producto.imagen = "imagen.jpg";

console.log(Object.isFrozen(producto));

console.log(producto);