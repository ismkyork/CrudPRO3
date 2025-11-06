<?=$cabecera?>


<div class="card shadow-lg mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Datos del Campeón</h5>
    </div>
    <div class="card-body">
      
        <form method="post" action="<?= base_url('actualizar') ?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?=$campeon['id']?>">

            <div class="form-group mb-3">
                <label for="nombre">Nombre del Campeón</label>
                <input id="nombre" value="<?=$campeon['nombre']?>" class="form-control" type="text" name="nombre" placeholder="Ej: Bardo" required>
            </div>

            <div class="form-group mb-3">
                <label for="ruta_imagen">Imagen del Campeón</label>
                <br>
                <td>
                    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$campeon['ruta_imagen']?>" width="100" alt="">
                    <?=$campeon['ruta_imagen']?>
                
                </td>

                <input id="ruta_imagen" class="form-control-file form-control" type="file" name="ruta_imagen" required>
                <small class="form-text text-muted">Sube una imagen (se guardará la ruta).</small>
            </div>

            <div class="form-group mb-3">
                <label for="rol">Rol</label>
                 <select id="rol" class="form-control" name="rol" required>

                <option value="" disabled>Selecciona un Rol</option> 
                <option value="Top"<?=($campeon['rol']=='Top')?'selected':''?>>Top</option>
                <option value="Jungla"<?=($campeon['rol']=='Jungla')?'selected':''?>>Jungla</option>
                <option value="Mid"<?=($campeon['rol']=='Mid')?'selected':''?>>Mid</option>
                <option value="ADC"<?=($campeon['rol']=='ADC')?'selected':''?>>ADC</option>
                <option value="Support"<?=($campeon['rol']=='Support')?'selected':''?>>Support</option>
                </select>
            </div>

            <div class="form-group mb-3">
                    <label for="region">Región</label>
                    <select id="region" class="form-control" name="region" required>

                    <option value="" disabled>Selecciona una Región</option>
                    <option value="Aguasturbias"<?= ($campeon['region']=='Aguasturbias')?'selected':''?>>Aguasturbias</option>
                    <option value="Ciudad de Bandle"<?= ($campeon['region']=='Ciudad de Bandle')?'selected':''?>>Ciudad de Bandle</option>
                    <option value="Demacia"<?= ($campeon['region']=='Demacia')?'selected':''?>>Demacia</option>
                    <option value="Freljord"<?= ($campeon['region']=='Freljord')?'selected':''?>>Freljord</option>
                    <option value="Vacio"<?= ($campeon['region']=='Vacio')?'selected':''?>>Vacio</option>
                    <option value="Isla de la Sombra"<?=($campeon['region']=='Isla de la Sombra')?'selected':''?>>Isla de la Sombra</option>
                    <option value="Ixtal"<?= ($campeon['region']=='Ixtal')?'selected':''?>>Ixtal</option>
                    <option value="Jonia"<?= ($campeon['region']=='Jonia')?'selected':''?>>Jonia</option>
                    <option value="Noxus"<?= ($campeon['region']=='Noxus')?'selected':''?>>Noxus</option>
                    <option value="Piltover"<?= ($campeon['region']=='Piltover')?'selected':''?>>Piltover</option>
                    <option value="Shurima"<?= ($campeon['region']=='Shurima')?'selected':''?>>Shurima</option>
                    <option value="Targon"<?= ($campeon['region']=='Targon')?'selected':''?>>Targon</option>
                    <option value="Zaun"<?= ($campeon['region']=='Zaun')?'selected':''?>>Zaun</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="raza">Raza</label>
                <select id="raza" class="form-control" name="raza" required>
                    <option value=""disabled>Selecciona una Raza</option>  
                    <option value="Humano"<?=($campeon['raza']=='Humano')?'selected':''?>>Humano</option>
                    <option value="Vastaya"<?=($campeon['raza']=='Vastaya')?'selected':''?>>Vastaya</option>
                    <option value="Yordle"<?=($campeon['raza']=='Yordle')?'selected':''?>>Yordle</option>
                    <option value="Ascendidos"<?=($campeon['raza']=='Ascendidos')?'selected':''?>>Ascendidos</option>
                    <option value="Darkin"<?=($campeon['raza']=='Darkin')?'selected':''?>>Darkin</option>
                    <option value="Ente Vacio"<?=($campeon['raza']=='Ente Vacio')?'selected':''?>>Ente Vacio</option>
                    <option value="Espíritu/Demonio"<?=($campeon['raza']=='Espíritu/Demonio')?'selected':''?>>Espíritu/Demonio</option>
                    <option value="Aspecto"<?=($campeon['raza']=='Aspecto')?'selected':''?>>Aspecto</option>
                    <option value="Golem/Constructo"<?=($campeon['raza'] == 'Golem/Constructo')?'selected':''?>>Golem/Constructo</option>
                    <option value="Indefinido"<?=($campeon['raza']=='Indefinido')?'selected':''?>>Indefinido</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="fecha_lanzamiento">Fecha de Lanzamiento</label>
                <input id="fecha_lanzamiento" value="<?=$campeon['fecha_lanzamiento']?>" class="form-control" type="text" name="fecha_lanzamiento" placeholder="Ej: AAAA-MM-DD o 2015-10-05" required>
                <small class="form-text text-muted">Ingresa la fecha en formato AAAA-MM-DD.</small>
            </div>

           <div class="form-group mb-4">
                <label for="tipo_daño">Tipo de Daño</label>
                <select id="tipo_daño" class="form-control" name="tipo_daño" required>

                    <option value=""disabled>Selecciona el Tipo de Daño</option>
                    <option value="Mágico"<?=($campeon['tipo_daño']=='Mágico')?'selected':''?>>Mágico</option>
                    <option value="Físico"<?=($campeon['tipo_daño']=='Físico')?'selected':''?>>Físico</option>
                    <option value="Híbrido"<?=($campeon['tipo_daño']=='Híbrido')?'selected':''?>>Híbrido</option>
    </select>
</div>

            <button type="submit" class="btn btn-success btn-lg w-100">
                <i class="fas fa-save me-2"></i> Actualizar Campeón
            </button>
            <br>
             <a href="<?=base_url('')?>" class="btn btn-info btn-lg w-100">Volver al inicio</a>
        </form>
    </div>
</div>
</div>

<?=$pieDePagina?>