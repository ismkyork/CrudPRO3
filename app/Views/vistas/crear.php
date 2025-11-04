<?=$cabecera?> 


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Datos del Campeón</h5>
        <p class="card-text">
            
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Nombre del Campeon</label>
                    <input id="Nombre del Campeon" class="form-control" type="text" name="Nombre del Campeon">
                </div>
             
                <div class="form-group">
                    <label for="Imagen">Imagen del Campeon</label>
                    <input id="Imagen" class="form-control-file" type="file" name="Imagen">
                </div>
            
                <button class="btn btn-success" type="button">Guardar</button>
            
            
            </form>
        
        </p>
    </div>
</div>



<?=$pieDePagina?>