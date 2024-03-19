<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=Ventas&a=main" class="btn btn-primary">Regresar</a>
    </div>  
  
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
        Modificar Venta
            </div>
            <div class="card-body">
                <form action="?c=Ventas&a=Actualizar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_salida" id="id_salida"  value="<?php echo $alm[0]->id_salida ?>">
                    </div>
                    <div class="form-group">
                        <label for="cliente_nombre">Nombre De Cliente</label>
                        <input type="text" class="form-control" name="cliente_nombre" id="cliente_nombre" value="<?php echo $alm[0]->cliente_nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="cliente_id">Cedula De Cliente</label>
                        <input type="text" class="form-control" name="cliente_id" id="cliente_id" value="<?php echo $alm[0]->cliente_id ?>">
                    </div>
                    <div class="form-group">
                        <label for="cliente_contacto">Celular De Cliente</label>
                        <input type="number" class="form-control" name="cliente_contacto" id="cliente_contacto" value="<?php echo $alm[0]->cliente_contacto ?>">
                    </div>


                    <div class="form-group">
                        <label for="cliente_direccion">Direccion De Cliente</label>
                        <input type="text" class="form-control" name="cliente_direccion" id="cliente_direccion" value="<?php echo $alm[0]->cliente_direccion ?>">
                    </div>
                        

                    <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"><?php echo $alm[0]->observaciones; ?></textarea>
                    </div>
                        
                  
                    <input type="submit" value="Guardar producto" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>






























<!-- 
<a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Ventas&a=Actualizar" method="post">

<input type="hidden" value="<?php echo $alm[0]->id_salida ?>" name="id_salida">

<label>Nombre del cliente</label>
    <input type="text" name="cliente_nombre" value="<?php echo $alm[0]->cliente_nombre; ?>">
    <br>

    <label>n° documento del cliente</label>
    <input type="text" name="cliente_id" value="<?php echo $alm[0]->cliente_id; ?>">
    <br>

    <label>n° cel del cliente</label>
    <input type="text" name="cliente_contacto" value="<?php echo $alm[0]->cliente_contacto; ?>">
    <br>

    <label>direccion del cliente</label>
    <input type="text" name="cliente_direccion" value="<?php echo $alm[0]->cliente_direccion; ?>">
    <br>

    <label>Observaciones</label>
    <textarea name="observaciones" cols="30" rows="10"><?php echo $alm[0]->observaciones; ?></textarea>
    <br>

    <input type="submit" value="Guardar">
</form> -->