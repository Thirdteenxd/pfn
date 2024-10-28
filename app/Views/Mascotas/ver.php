<?php #print_r($query);?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ver Mascotas</title>
</head>
<h2>Ver Todas las mascotas</h2>
    <br>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Fecha (N)</th>
            <th>Sexo</th>
            <th>Color</th>
            <th>Peso</th>
            <th>Nombre (Dueño)</th>
            <th>Teléfono (Dueño)</th>
            <th>Correo (Dueño)</th>
            <th>Fecha (Registro)</th>
            
        </thead>
        <tbody>
            <?php foreach ($query as $x) : ?>
                <tr>
                    <td><?php echo $x['id_mascota']; ?></td>
                    <td><?php echo $x['nombre']; ?></td>
                    <td><?php echo $x['especie']; ?></td>
                    <td><?php echo $x['raza']; ?></td>
                    <td><?php echo $x['fecha_nacimiento']; ?></td>
                    <td><?php echo $x['sexo']; ?></td>
                    <td><?php echo $x['color']; ?></td>
                    <td><?php echo $x['peso']; ?></td>
                    <td><?php echo $x['nombre_dueno']; ?></td>
                    <td><?php echo $x['telefono_dueno']; ?></td>
                    <td><?php echo $x['email_dueno']; ?></td>
                    <td><?php echo $x['fecha_registro']; ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>