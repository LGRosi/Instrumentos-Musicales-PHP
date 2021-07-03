<?php

   require_once __DIR__ . '/bootstrap/rutas.php';

    $pagina = $_GET['p'] ?? 'inicio';

    if (!isset($paginasPermitidas[$pagina])) {
        $pagina = "404";
    }

   //Títulos de las páginas:
   $tituloPaginas = $paginasPermitidas[$pagina];

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="icon" href="imagenes/nota.png" />
        <title>Musindi | <?=$tituloPaginas['title'];?></title>
    </head>


    <body class="fondobody">

        <header class="container-fluid fondoheader h-100">
            <h1 class="logo">Instrumentos musicales</h1>
                <div class="row">
                    <nav class="col px-md-5 navbar navbar-expand-md navbar-dark fondoheader">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Menú Hamburguesa">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="barra">
                            <ul class="navbar-nav text-center ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?p=listados">LISTADO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?p=contacto">CONTACTO</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </header>


        

       
        <?php
            require __DIR__ . '/paginas/' . $pagina . '.php';
        ?>
    




        <footer class="container-fluid fondofooter text-white">
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col-lg-10 mt-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-md-6 pb-lg-4 pl-3">
                            <p class="text pb-3">Información adicional de Musindi:</p>
                            <p class="datos colorletras">Somos una empresa con 30 años de trayectoria. Nos orientamos a los apasionados de la música.</p>
                            <p class="logofooter mb-5 mb-sm-1 ml-5">Musindi</p>
                        </div>

                        <div class=" col-sm-8 col-md-6 pl-3 pl-md-5">
                            <p class="text pb-3">Información de la tienda:</p>
                            <ul class="ulredes mb-5">
                                <li class="my-1">MUSINDI</li>
                                <li class="mb-1">Calle falsa 123 - CABA</li>
                                <li class="mb-1">Ciudad de Buenos Aires - Argentina</li>
                                <li class="mb-1">Llamanos: 11 9999 9999</li>
                                <li class="mb-1">Envianos un correo electrónico:</li>
                                <li>instrumentos@musindi.com.ar</li>
                            </ul>
                            <div class="pb-5 mt-5 mt-sm-1">
                                <ul class="ulredes d-flex flex-wrap flex-sm-nowrap">
                                    <li class="my-1 px-3 px-sm-2"><a href="https://es-la.facebook.com/" target="_blank"><img class="redes" src="imagenes/facebook.png" alt="facebook"></a></li>
                                    <li class="my-1 px-3 px-sm-2"><a href="https://twitter.com/login?lang=es" target="_blank"><img class="redes" src="imagenes/twitter.png" alt="twitter"></a></li>
                                    <li class="my-1 px-3 px-sm-2"><a href="https://web.whatsapp.com/" target="_blank"><img class="redes" src="imagenes/whatsapp.png" alt="whatsapp"></a></li>
                                    <li class="my-1 px-3 px-sm-2"><a href="https://www.youtube.com/" target="_blank"><img class="youtube" src="imagenes/youtube.png" alt="youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="copy w-100 pt-2 colorletras" id="info">
                    <p class="mx-5">© copyright 2020 Todos los Derechos Reservados | Musindi</p>
                </div>

            </div> 

        </footer>


        
        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        
        <script>
            $('.nav-item').on('click', function() {
                $(".navbar-collapse").collapse("hide");
            })
        </script>


        <script>
            document.createElement("picture");
        </script>
        <script src="js/picturefill.js"></script>

        <script>
            $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
            })
        </script>

    </body>
</html>
