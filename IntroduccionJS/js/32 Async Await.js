// Async - Await

function descargarNuevosClientes () {
  return new Promise (resolve => {
    console.log('Descargando nuevos clientes... espere...');

    setTimeout(() => resolve('Los clientes fueron Descargados'), 5000);
  });
};

function descargarUltimosPedidos() {
  return new Promise (resolve => {
    console.log('Descargando ultimos pedidos... espere...');

    setTimeout(() => resolve('Los pedidos fueron Descargados'), 3000);
  });
};


async function app(){
  try {
    // const clientes = await descargarNuevosClientes();
    // const pedidos = await descargarNuevosClientes();
    // console.log(clientes);
    // console.log(pedidos);

    const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimosPedidos()]);
    console.log(resultado[0]);
    console.log(resultado[1]);

  } catch (error) {
    console.log(error);
  };
};

app();

console.log('Este codigo no se bloquea');