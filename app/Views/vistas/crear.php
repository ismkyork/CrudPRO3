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
                    <label for="Nombre del Campeon">Nombre del Campeon</label>
                    <input id="Nombre del Campeon" class="form-control" type="text" name="Nombre del Campeon">
                </div>

                <div class="form-group">
                    <label for="Region">Region</label>
                    <select id="Region" class="form-control" name="region">
                        <option value="" disabled selected>Seleccione una region</option>
                        <option value="Top">Top</option>
                        <option value="Jungla">Jungla</option>
                        <option value="Mid">Mid</option>
                        <option value="Support">Support</option>
                        <option value="ADC">ADC</option>
                    </select>
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