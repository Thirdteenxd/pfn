<title>Edición</title>
<body>
    <h1>Formulario de edición</h1>
    <p>Lea con atención, algunos datos son de la mascota y otros datos son suyos</p3>
    <form action="ediciondb" method="post">
        <div class="row">
        <p><strong>Mascota:</strong></p>
            <div class="col">
                <input type="text" class="form-control" placeholder="Id a editar" name="id_mascota">
            </div>
            <div class="col">
            <select class="form-select" name="que">
                <option selected>¿Qué deseas editar?</option>
                <option value="id_mascota">ID</option>
                <option value="nombre">Nombre</option>
                <option value="especie">Especie</option>
                <option value="raza">Raza</option>
                <option value="sexo">Sexo</option>
                <option value="color">Color</option>
                <option value="peso">Peso</option>
                <option value="nombre_dueno">Nombre (Dueño)</option>
                <option value="telefono_dueno">Teléfono (Dueño)</option>
                <option value="correo_dueno">Correo (Dueño)</option>
            </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Por reemplazar:" name="new">
            </div>
        </div><br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Editar</button>
            </div>
    </form>
</body>