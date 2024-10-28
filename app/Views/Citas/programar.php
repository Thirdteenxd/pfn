<title>Programacion de Citas</title>
<body>
    <h1>Programacion de Citas</h1>
    <p>Lea con atención</p3>
    <form action="registrodb" method="post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Motivo" name="motivo">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Veterinario" name="veterinario">
            </div>
            <div class="col">
                <input type="date" class="form-control" placeholder="" name="datetime">
            </div>
            <div class="col">
            <select class="form-select" name="que">
                <option selected>Estado</option>
                <option value="Programada">Programada</option>
                <option value="Completada">Completada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
            </div>
        </div><br>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Motivo</label>
            <textarea class="form-control" name="notas" rows="3"></textarea>
        </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Programar Cita</button>
            </div>
    </form>
</body>