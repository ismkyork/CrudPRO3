<?=$cabecera?>

        <a href="<?=base_url('crear')?>">Crear un campeon</a>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>region</th>
                <th>raza</th>
                <th>fecha de lanzamiento</th>
                <th>tipo de daño</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($tabla_campeones as $campeon): ?>
            <tr>
            <td><?=$campeon['id']?></td>
                <td><?=$campeon['ruta_imagen']?></td>
                <td><?=$campeon['nombre']?></td>
                <td><?=$campeon['rol']?></td>
                <td><?=$campeon['region']?></td>
                <td><?=$campeon['raza']?></td>
                <td><?=$campeon['fecha_lanzamiento']?></td>
                <td><?=$campeon['tipo_daño']?></td>
                <td>Editar/
                
            <a href="<?=base_url('borrar/'.$campeon['id']);?>" class="btn btn-danger" type="button">Borrar</a>
            
            </td>
            </tr>
        </tbody>
        <?php endforeach?>
    </table>

<?=$pieDePagina?>


