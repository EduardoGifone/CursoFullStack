async function obtenerEmpleados () {

  const archivo = 'empleados.json';
  // Usando promises
  // fetch(archivo)
  //   .then(resultado => resultado.json())
  //   .then(datos => {
  //     // console.log(datos.empleados);

  //     const {empleados} = datos;
  //     // console.log(empleados);

  //     empleados.forEach(({nombre, puesto}) => console.log(nombre, puesto) );
  //   });

  // Usando async / await
  const resultado = await fetch(archivo);
  const empleados = await resultado.json();
  console.log(empleados);
};

obtenerEmpleados();
