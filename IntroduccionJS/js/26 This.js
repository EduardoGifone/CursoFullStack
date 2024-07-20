// This

const cliente = {
  nombre: 'Eduardo',
  apellido: 'Gifone',
  total: 230,
  pagado: false,
  informacion : function() { // this en un function hace referencia a los atributos del objeto
    console.log(`El cliente ${this.nombre} tiene un total a pagar de: ${this.total}`);
  }
};

cliente.informacion();

window.nombre = "UN NOMBRE EN WINDOW";

const cliente2 = {
  nombre: 'Eduardo',
  apellido: 'Gifone',
  total: 230,
  pagado: false,        //                                                  window
  informacion : () => { // this en un arrow function hace referencia a la ventanta global
    console.log(`El cliente ${this.nombre} tiene un total a pagar de: ${this.total}`);
  }
};

cliente2.informacion();