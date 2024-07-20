// Arreglos o Arrays

const numeros = [10, 20, 30, 40, 50];

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];

// const arreglo = ['Hola', 1, 12.5, null, false, {nombre: 'Eduardo', edad: 21}, [1,3,4,5]];
// console.table(arreglo);


// // Acceder a los valores de un arreglo
// console.log(numeros[3]);
// console.log(numeros[300]);

// // Conocer la extension de un arreglo
// console.log(meses.length)

// // Recorrer el arreglo
// meses.forEach(function(mes) {
//   console.log(mes);
// });


// Agregar elementos
// numeros[5] = 60;

// push (final)
numeros.push(100, 200, 300);

// unshift (inicio)
numeros.unshift(-10, -20, -30);

console.table(numeros);


// Eliminar elementos

// // pop (ultimo)
// meses.pop();

// // shift (primer)
// meses.shift();

// splice (desde una posicion cuantos para adelante)
// meses.splice(2,1);

console.table(meses);


// rest operator o spread operator

const nuevoArreglo = [...meses, 'Mayo'];

console.table(nuevoArreglo);