<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=proveedores&a=main" class="btn btn-primary">Regresar</a>
    </div>
  
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Registrar Proveedor
            </div>
            <div class="card-body">
                <form action="?c=Proveedores&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_proveedor" id="id_proveedor"  required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre De Proveedor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"  required>
                    </div>
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="number" class="form-control" name="nit" id="nit"  required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo"  required>
                    </div>

                    <div class="form-group">
                        <label for="contacto_nombre">Nombre De Contacto</label>
                        <input type="text" class="form-control" name="contacto_nombre" id="contacto_nombre"  required>
                    </div>
                        

                    <div class="form-group">
                        <label for="contacto_cel">Numero De Contacto</label>
                        <input type="number" class="form-control" name="contacto_cel" id="contacto_cel"  required>
                    </div>
      
                  
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>







<!-- 


<a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Proveedores&a=Guardar" method="post">

    <label>nombre del proveedor</label>
    <input type="text" name="nombre" required>
    <br>

    <label>nit</label>
    <input type="number" name="nit" required>
    <br>

    <label>correo</label>
    <input type="email" name="correo" required>
    <br>

    <label>nombre del contacto</label>
    <input type="text" name="contacto_nombre">
    <br>
    
    <label>numero del contacto</label>
    <input type="number" name="contacto_cel">
    <br>

    <input type="submit" value="Guardar">
</form> -->