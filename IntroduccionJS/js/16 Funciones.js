// Funciones 

// Declaracion de la funcion

sumar();

function sumar() {
  console.log(10 + 10)
};


// Expresion de la funcion

sumar2();

const sumar2 = function () {
  console.log(3 + 3);
};


// IIFE (sirve para que no se mezclen las variables y funciones con las de otros archivos)

(function(){
  console.log('Esto es una funcion');
})();