<?=$cabecera?>


       <div class="d-flex justify-content-center mb-4">
    <a class="btn btn-success btn-lg" 
        href="<?=base_url('crear')?>"
        style="
            padding: 1.5rem 3rem; 
            transition: all 0.3s ease-in-out; /* Transición suave para todos los cambios */
            background-color: #28a745; /* Color base del botón */
            border-color: #28a745; /* Asegura el color del borde */
        "
        onmouseover="
            this.style.transform='scale(1.1)'; /* Lo hace 10% más grande */
            this.style.backgroundColor='#218838'; /* Color más oscuro al pasar el ratón */
            this.style.borderColor='#1e7e34'; /* Borde más oscuro */
        "
        onmouseout="
            this.style.transform='scale(1)'; /* Vuelve al tamaño original */
            this.style.backgroundColor='#28a745'; /* Vuelve al color base */
            this.style.borderColor='#28a745'; /* Vuelve al color base del borde */
        ">
        Crear un campeón
    </a>
        </div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
<?php foreach($tabla_campeones as $campeon): ?>
    <div class="col">
        <div class="card h-100 shadow-lg border border-info border-5 rounded-3" 
    style="background-color: #4682B4; color: white; transition: all 0.2s ease-in-out;"
    onmouseover="this.style.transform='scale(1.03)'"
    onmouseout="this.style.transform='scale(1)'">
            <div class="card-body">
                <div class="text-center mb-3">
                    <img class="img-thumbnail" src="<?=base_url('/uploads/'.$campeon['ruta_imagen'])?>" width="250" alt="<?=$campeon['nombre']?>">
                </div>
                <h5 class="card-title text-center"><?=$campeon['nombre']?></h5>
                <hr>
                <p class="card-text">
                    <strong>ID:</strong> <?=$campeon['id']?> <br>
                    <strong>Rol:</strong> <?=$campeon['rol']?> <br>
                    <strong>Región:</strong> <?=$campeon['region']?> <br>
                    <strong>Raza:</strong> <?=$campeon['raza']?> <br>
                    <strong>Lanzamiento:</strong> <?=$campeon['fecha_lanzamiento']?> <br>
                    <strong>Tipo de Daño:</strong> <?=$campeon['tipo_daño']?>
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="<?=base_url('editar/'.$campeon['id'])?>" class="btn btn-sm btn-info w-50 me-2" type="button">Editar</a>
                <a href="<?=base_url('borrar/'.$campeon['id'])?>" onclick="return confirm('¿Seguro que deseas borrar este campeón?')" class="btn btn-sm btn-danger w-50" type="button">Borrar</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?=$pieDePagina?>


