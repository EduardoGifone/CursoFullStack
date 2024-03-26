// Metodos de arrays

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [
  {nombre: 'Monitor 20 pulgadas', precio: 600},
  {nombre: 'Televisio 50 pulgadas', precio: 700},
  {nombre: 'Tablet', precio: 300},
  {nombre: 'Audifonos', precio: 200},
  {nombre: 'Teclado', precio: 50},
  {nombre: 'Celular', precio: 500},
];

// forEach
meses.forEach(function(mes){
  if(mes == 'Marzo')
    console.log('Marzo si existe');
});

// includes (para arreglos planos)
let resultado = meses.includes('Diciembre');

// some (para arreglos de objetos)
resultado = carrito.some(function (producto){
  return producto.nombre === 'Celular';
});

// reduce
resultado = carrito.reduce(function(total, producto){
  return total + producto.precio;
}, 0);

// filter 
resultado = carrito.filter(function(producto) {
  return producto.precio > 400;
});

console.log(resultado);