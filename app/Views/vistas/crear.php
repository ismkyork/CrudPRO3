<?=$cabecera?> 


<div class="card shadow-lg mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Datos del Campeón</h5>
    </div>
    <div class="card-body">
      
        <form method="post" action="<?= base_url('guardar') ?>" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="nombre">Nombre del Campeón</label>
                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Ej: Bardo" required>
            </div>

            <div class="form-group mb-3">
                <label for="ruta_imagen">Imagen del Campeón</label>
                <input id="ruta_imagen" class="form-control-file form-control" type="file" name="ruta_imagen" required>
                <small class="form-text text-muted">Sube una imagen (se guardará la ruta).</small>
            </div>

            <div class="form-group mb-3">
                <label for="rol">Rol</label>
                <select id="rol" class="form-control" name="rol" required>
                    <option value="" disabled selected>Selecciona un Rol</option>
                    <option value="Top">Top</option>
                    <option value="Jungla">Jungla</option>
                    <option value="Mid">Mid</option>
                    <option value="ADC">ADC</option>
                    <option value="Support">Support</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="region">Región</label>
                <select id="region" class="form-control" name="region" required>
                    <option value="" disabled selected>Selecciona una Región</option>
                    <option value="Aguasturbias">Aguasturbias</option>
                    <option value="Ciudad de Bandle">Ciudad de Bandle</option>
                    <option value="Demacia">Demacia</option>
                    <option value="Freljord">Freljord</option>
                    <option value="Vacio">Vacío</option>
                    <option value="Isla de la Sombra">Isla de la Sombra</option>
                    <option value="Ixtal">Ixtal</option>
                    <option value="Jonia">Jonia</option>
                    <option value="Noxus">Noxus</option>
                    <option value="Piltover">Piltover</option>
                    <option value="Shurima">Shurima</option>
                    <option value="Targon">Targon</option>
                    <option value="Zaun">Zaun</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="raza">Raza</label>
                <select id="raza" class="form-control" name="raza" required>
                    <option value="" disabled selected>Selecciona una Raza</option>
                    <option value="Humano">Humano</option>
                    <option value="Vastaya">Vastaya</option>
                    <option value="Yordle">Yordle</option>
                    <option value="Ascendidos">Ascendidos</option>
                    <option value="Darkin">Darkin</option>
                    <option value="Ente Vacio">Ente Vacío</option>
                    <option value="Espiritu/Demonio">Espíritu/Demonio</option>
                    <option value="Aspecto">Aspecto</option>
                    <option value="Golem/Constructo">Golem/Constructo</option>
                    <option value="Indefinido">Indefinido</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="fecha_lanzamiento">Fecha de Lanzamiento</label>
                <input id="fecha_lanzamiento" class="form-control" type="text" name="fecha_lanzamiento" placeholder="Ej: AAAA-MM-DD o 2015-10-05" required>
                <small class="form-text text-muted">Ingresa la fecha en formato AAAA-MM-DD.</small>
            </div>

            <div class="form-group mb-4">
                <label for="tipo_daño">Tipo de Daño</label>
                <select id="tipo_daño" class="form-control" name="tipo_daño" required>
                    <option value="" disabled selected>Selecciona el Tipo de Daño</option>
                    <option value="magico">Mágico</option>
                    <option value="fisico">Físico</option>
                    <option value="hibrido">Híbrido</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100">
                <i class="fas fa-save me-2"></i> Guardar Campeón
            </button>
        </form>
    </div>
</div>
</div>

<?=$pieDePagina?>