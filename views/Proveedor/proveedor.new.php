<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=Proveedores&a=main" class="btn btn-primary">Regresar</a>
    </div>

    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Registrar Proveedor
            </div>
            <div class="card-body">
                <form action="?c=Proveedores&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_proveedor" id="id_proveedor" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre De Proveedor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="number" class="form-control" name="nit" id="nit" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" required>
                    </div>

                    <div class="form-group">
                        <label for="contacto_nombre">Nombre De Contacto</label>
                        <input type="text" class="form-control" name="contacto_nombre" id="contacto_nombre" required>
                    </div>


                    <div class="form-group">
                        <label for="contacto_cel">Numero De Contacto</label>
                        <input type="number" class="form-control" name="contacto_cel" id="contacto_cel" required>
                    </div>


                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>

                 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Desea Cerrar Sesion?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
             <div class="modal-footer">
                 <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                 <a class="btn btn-primary" href="?c=Login&a=main">Cerrar Sesion</a>
             </div>
         </div>
     </div>
 </div>
            </div>
        </div>
    </div>
</div>