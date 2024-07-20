// Unir Objetos

const producto = {
  nombre: "Monitor",
  precio: 300,
  disponible: true
};

const medidas = {
  peso: '1kg',
  medidas: '1m'
};

// (...) rest operator
const nuevoProducto = { ...producto, ...medidas };

console.log(producto);
console.log(nuevoProducto);