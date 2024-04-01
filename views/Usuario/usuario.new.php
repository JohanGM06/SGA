<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=Usuarios&a=main" class="btn btn-primary">Regresar</a>
    </div>

    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Registrar Usuario
            </div>
            <div class="card-body">
                <form action="?c=Usuarios&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_usuario" id="id_usuario">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">contraseña</label>
                        <input type="text" class="form-control" name="contraseña" id="contraseña" required>
                    </div>

                    <div class="form-group">
                        <label for="permiso">Permisos</label>
                        <select class="form-control" name="permiso" id="permiso" required>
                            <option disabled selected>Atribuye un rol</option>
                            <?php foreach ($this->model->Permiso() as $p) : ?>
                                <option value="<?php echo $p->id_permiso ?>">
                                    <?php echo $p->detalles; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <input type="submit" value="Guardar Usuario" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
