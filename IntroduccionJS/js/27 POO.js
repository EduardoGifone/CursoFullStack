// POO

// Object literal
const producto = {
  nombre: 'Tablet',
  precio: 245
};

//Object Constructor
function Producto(nombre, precio, disponible) { // paramentros
  this.nombre = nombre,
  this.precio = precio,
  this.disponible = disponible
};

// Prototype nos permite crear funciones que solo se usaran con un tipo de objeto
Producto.prototype.formatearProducto = function(){
  return `El producto ${this.nombre} tiene un precio de $${this.precio}`;
};

const producto1 = new Producto('Computadora', 890, true); // argumentos
const producto2 = new Producto('Celular', 600, false);
const producto3 = new Producto('Tv', 1000, false);

console.log(producto);
console.log(producto1);
console.log(producto2);
console.log(producto3.formatearProducto());