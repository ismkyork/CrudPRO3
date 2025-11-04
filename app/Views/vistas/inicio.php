<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAGUE OF CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de campeones de League Of Legends</h1>
<a href="">Crear un campeon</a>
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
                <td>Editar/borrar</td>
            </tr>
        </tbody>
        <?php endforeach?>
    </table>
</body>
</html>

