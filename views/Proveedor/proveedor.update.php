<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=Proveedores&a=main" class="btn btn-primary">Regresar</a>
    </div>

    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Modificar Proveedor
            </div>
            <div class="card-body">
                <form action="?c=Proveedores&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_proveedor" id="id_proveedor" value="<?php echo $alm[0]->id_proveedor ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre De Proveedor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $alm[0]->nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="number" class="form-control" name="nit" id="nit" value="<?php echo $alm[0]->nit ?>">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $alm[0]->correo ?>">
                    </div>

                    <div class="form-group">
                        <label for="contacto_nombre">Nombre De Contacto</label>
                        <input type="text" class="form-control" name="contacto_nombre" id="contacto_nombre" value="<?php echo $alm[0]->contacto_nombre ?>">
                    </div>


                    <div class="form-group">
                        <label for="contacto_cel">Numero De Contacto</label>
                        <input type="cel" class="form-control" name="contacto_cel" id="contacto_cel" value="<?php echo $alm[0]->contacto_cel ?>">
                    </div>


                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
