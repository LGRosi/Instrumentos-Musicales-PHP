<section class="container my-5 px-4">
    <div class="row">
        <form class="col-md-6 my-3 pr-lg-5 colorletraslabel" action="#" method="POST">
            <h2 class="h1">Bienvenido a Musindi!</h2>
    
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control form2" id="nombre" placeholder="Nombre..." required>
            </div>
    
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control form2" id="apellido" placeholder="Apellido..." required>
            </div>
    
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control form2" id="mail" placeholder="ejemplo@email.com" required>
            </div>
    
            <div class="form-group">
                <label for="comentario">Mensaje</label>
                <textarea id="comentario" class="form-control form" cols="40" rows="3" placeholder="Dejanos tu comentario..." required></textarea>
            </div>
    
            <div>
                <input type="submit" value="ENVIAR" class="form2 col-12 col-md-5 btnservicios"  data-toggle="modal" data-target="#alert">
            </div>
        </form>

        <aside class="col-md-6 fondoaside mt-4">
            <h2 class="mt-2">Eventos musicales</h2>
            <figure>
                <picture>
                    <source media="(max-width: 599px)" srcset="imagenes/imgAside_celular.jpg">
                    <source media="(max-width: 800px)" srcset="imagenes/imgAside_tablet.jpg">    
                    <img src="imagenes/imgAside_pc.jpg" alt="Festival" title="Festival" class="img-fluid radiusimgaside mt-3 w-100"  />
                </picture>
            </figure>
            <h3 class="mt-4 mb-3">Día Internacional de la Música</h3>
            <p>
                <strong>El Día Internacional de la Música se celebra el 1 de octubre</strong>,
                fecha establecida por la UNESCO en 1975.
                Es una oportunidad que se nos presenta para honrar a todos los músicos
                y los estilos que disfrutan y comparten todas las personas, en el sentido
                de unir y compartir un mismo sentimiento.
            </p>
        </aside>
    </div>
</section>
