<?php

    require __DIR__ . '/../data/listados.php';

    $id = $_GET['id'];
    $listado = $listados[$id];
?>

<section class="container px-4">
    <article class="row">
        <div class="col-md-4">
            <h2 class="h20">Detalle del producto</h2>
            <figure>
                <picture>
                    <source media="(max-width: 599px)" srcset="imagenes/<?= $listado['imgCelular'];?>">
                    <source media="(max-width: 800px)" srcset="imagenes/<?= $listado['imgTablet'];?>">    
                    <img src="imagenes/<?= $listado['imgPc'];?>" alt="<?= $listado['alt'];?>" title="Bajo" class="img-fluid imgradius mt-4" />
                </picture>
            </figure>
        </div>
        <div class="col-md-8 mt-md-5 pt-3 px-md-5">
            <h3><?= $listado['titulo'];?></h3>
            <p><?= $listado['descripcion'];?></p>
            <a href="index.php?p=listados" class="btn colorboton mb-5 mt-2">AGREGAR</a>
        </div>
    </article>
</section>
