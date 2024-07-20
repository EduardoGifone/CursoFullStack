// Objetos

const producto = {
  nombre: "Monitor",
  precio: 300,
  disponible: true
};

// Destructuring (objetos y arreglos) (...)
const { precio, nombre } = producto;

console.log(precio, nombre);