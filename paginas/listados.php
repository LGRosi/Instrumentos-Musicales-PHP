<?php
     require __DIR__ . '/../data/listados.php';
?>



<main class="container my-5 px-4 pb-5">

    <section class="row">
        <div class="col-md-8  m-md-auto px-4">
        <?php foreach($listados as $i => $listado): ?>
            <h2 class="h1 h20 text-center mb-5">Nuestra selección</h2>
            <div class="row">
                <article class="col-12 col-lg fondoblancoinstr px-3 mx-md-2 mt-3">
                    <figure class="d-flex justify-content-center">
                        <picture>
                            <source media="(max-width: 599px)" srcset="imagenes/<?= $listado['imgCelular'];?>">
                            <source media="(max-width: 800px)" srcset="imagenes/<?= $listado['imgTablet'];?>">    
                            <img src="imagenes/<?= $listado['imgPc'];?>" alt="<?= $listado['alt'];?>" title="Bajo" class="img-fluid imgradius mt-4" />
                        </picture>
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title"><?= $listado['titulo'];?></h3>
                        <p class="stars">Estrellas</p>
                            <p class="card-text tachado mb-0 ml-2"><small class="text-muted"><?= $listado['precioTachado'];?></small></p>
                            <div class="d-flex justify-content-start mb-0">
                                <p class="card-text tamañotxt ml-2 mr-4"><?= $listado['precio'];?></p>
                                <p class="card-text colorprecio mt-1"><?= $listado['descuento'];?></p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <figure>
                                    <img src="imagenes/deliverydos.svg" class="envio mr-4 ml-0" alt="delivery" />
                                </figure>
                                <p class="colorprecio mt-3">ENVÍO GRATIS</p>
                            </div>
                            <button type="button" class="btn colorboton w-100 mb-2" data-toggle="modal" data-target="#staticBackdrop">AGREGAR AL CARRITO</button>
                            
                            <a href="index.php?p=listados-leer&id=<?= $i;?>" class="btn btn-outline btnborde w-100 my-1">VER DETALLE</a> 
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
</main>





