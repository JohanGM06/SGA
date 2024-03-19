<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=productos&a=main" class="btn btn-primary">Regresar</a>
    </div>  
  
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
               Modificar Producto
            </div>
            <div class="card-body">
                <form action="?c=Productos&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_producto" id="id_producto"  value="<?php echo $alm[0]->id_producto ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $alm[0]->nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" value="<?php echo $alm[0]->precio ?>">
                    </div>
                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <input type="number" class="form-control" name="talla" id="talla" value="<?php echo $alm[0]->talla ?>">
                    </div>
                        
                    <div class="form-group">
                        <label for="proveedor">Proveedor</label>
                        <select class="form-control" name="proveedor" id="proveedor" required>
                        <option disabled selected>selecciona un proveedor</option>
                        <?php foreach ($this->model->Proveedor() as $p) : ?>
                            <option value="<?php echo $p->id_proveedor ?>" <?php if (isset($alm[0]->proveedor) && ($alm[0]->proveedor == $p->id_proveedor)) { ?>selected<?php } ?>>
                        <?php echo $p->nombre; ?>
                        </option>
                        <?php endforeach; ?>
                        </select>
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
<form action="?c=Productos&a=Guardar" method="post">

<input type="hidden" name="id_producto" value="<?php echo $alm[0]->id_producto ?>">

<label>Nombre del producto</label>
    <input type="text" name="nombre" value="<?php echo $alm[0]->nombre ?>" required>
    <br>

    <label>precio</label>
    <input type="number" name="precio" value="<?php echo $alm[0]->precio ?>" required>
    <br>

    <label>medida</label>
    <input type="number" name="talla" value="<?php echo $alm[0]->talla ?>" required>
    <br>

    <label>proveedor</label>
    <select class="form-control" name="proveedor" id="" required>
        <?php foreach ($this->model->Proveedor() as $p) : ?>
            <option value="<?php echo $p->id_proveedor ?>" <?php if (isset($alm[0]->proveedor) && ($alm[0]->proveedor == $p->id_proveedor)) { ?>selected<?php } ?>>
                <?php echo $p->nombre; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>

    <input type="submit" value="Guardar">
</form> -->