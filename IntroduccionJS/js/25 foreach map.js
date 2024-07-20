const carrito = [
  {nombre: 'Monitor 20 pulgadas', precio: 600},
  {nombre: 'Televisio 50 pulgadas', precio: 700},
  {nombre: 'Tablet', precio: 300},
  {nombre: 'Audifonos', precio: 200},
  {nombre: 'Teclado', precio: 50},
  {nombre: 'Celular', precio: 500},
];

// forEach (metodos solo de arreglos) (se usa cuando quires mostrar cada elemento en consola)
carrito.forEach(producto => console.log(producto.nombre));

// map (metodos solo de arreglos) (se usa cuando quieres crear un nuevo arreglo)

const nombreProductos = carrito.map(producto => producto.nombre);
console.table(nombreProductos);