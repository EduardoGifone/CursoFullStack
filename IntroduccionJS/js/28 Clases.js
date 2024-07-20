// Clases

class Producto {
  constructor(nombre, precio, disponibilidad){
    this.nombre = nombre,
    this.precio = precio,
    this.disponibilidad = disponibilidad
  };

  formatearProducto(){
    return `El producto ${this.nombre} tiene un precio de $${this.precio}`;
  };

  disponibilidadProducto() {
    if(this.disponibilidad)
      return `El producto ${this.nombre} esta disponible`;
    else 
      return `El prodcuto ${this.nombre} no esta disponible`
  };
};

const producto1 = new Producto('Computadora', 890, true); // argumentos

console.log(producto1);
console.log(producto1.formatearProducto());
console.log(producto1.disponibilidadProducto());

// Herencia

class Libro extends Producto {
  constructor(nombre, precio, disponibilidad, isbn){
    super(nombre, precio, disponibilidad);
    this.isbn = isbn;
  };

  formatearProducto() {
    return `${super.formatearProducto()} y un isbn de ${this.isbn}`
  }
};

const libro1 = new Libro('Atomic Habits', 56, false, 12398479182374); // argumentos

console.log(libro1);
console.log(libro1.formatearProducto());
console.log(libro1.disponibilidadProducto());;