// Objetos

const producto = {
  nombre: "Monitor",
  precio: 300,
  disponible: true
};

// console.log(producto.nombre);

// console.log(producto["precio"]);

// Agregar propiedades
producto.imagen = "imagen.jpg";

// Eliminar propiedades
delete producto.imagen;

console.log(producto);