<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confiteria adso</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body id="index">
    
    <header id="encabezado">
     <?php require_once __DIR__ . "/../confiteria_adso/vistas/header.php" ?>
    </header>

    <section id="general">
        <button class="general">Confiteria</button>
        <button class="general">Regalos</button>
    </section>
    
    <section id="slider"></section>
   <?php require_once __DIR__ . "/../confiteria_adso/vistas/productos.php" ?>
    <section id="banners">

<div class="banner" id="mis-pedidos">
    <button class="ver_mas">Ver más</button>
</div>
<div class="banner" id="quienes-somos">
    <button class="ver_mas" id="ver_mas">Ver más</button>
</div>
<div class="banner" id="preferencial">
    <button class="ver_mas">Ver más</button>
</div>
    </section>
    <footer id="pie_pagina">
    <?php require_once __DIR__ . "/../confiteria_adso/vistas/footer.php" ?>
    </footer>
    
    
    
</body>
</html>



