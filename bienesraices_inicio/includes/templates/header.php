<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio ? "inicio" : "";?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                
                
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono de menu responsive">
                </div>
                
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Icono de dark mode">
                    <nav class="navegacion navegacion--hidden">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!--.barra-->
            <?php 
                if ($inicio){
                    echo "<h1>Ventas de Casas y Departamentos Exclusivos de Lujo</h1>";
                }
            ?>
        </div> <!--.contenido-header-->
    </header>