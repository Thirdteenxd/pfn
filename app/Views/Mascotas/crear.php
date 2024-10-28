<title>Registro de Mascotas</title>
<body>
    <h1>Formulario de registro</h1>
    <p>Lea con atención, algunos datos son de la mascota y otros datos son suyos</p3>
    <form action="registrodb" method="post">
        <div class="row">
        <p><strong>Mascota:</strong></p>   
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" name="pet_nombre">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Especie" name="pet_especie">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Raza" name="pet_raza">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <input type="date" class="form-control" name="pet_date">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Sexo, (Macho o Hembra)" name="pet_sexo">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Color" name="pet_color">
            </div>
            <div class="col">
            <input type="number" class="form-control" name="peso" placeholder="Peso" step="0.01" min="0" max="100">
            </div>
        </div><br>
        <div class="b-example-divider"></div><br>
        <div class="row">
            <p><strong>Dueño:</strong></p>
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Teléfono" name="telefono">
            </div>
            <div class="col">
                <input type="email" class="form-control" placeholder="Correo" name="correo">
            </div>
        </div><br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Registrarme</button>
            </div>
    </form>
</body>