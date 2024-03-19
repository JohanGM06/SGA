<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="?c=productos&a=main" class="btn btn-primary">Regresar</a>
    </div>
  
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Registrar Producto
            </div>
            <div class="card-body">
                <form action="?c=Productos&a=Guardar" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="id_producto" id="id_producto"  required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"  required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio"  required>
                    </div>
                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <input type="number" class="form-control" name="talla" id="talla"  required>
                    </div>
                        
                    <div class="form-group">
                        <label for="proveedor">Proveedor</label>
                        <select class="form-control" name="proveedor" id="proveedor" required>
                        <option disabled selected>selecciona un proveedor</option>
                        <?php foreach ($this->model->Proveedor() as $p) : ?>
                        <option value="<?php echo $p->id_proveedor ?>">
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




























<!-- <a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Productos&a=Guardar" method="post">

    <label>Nombre del producto</label>
    <input type="text" name="nombre" required>
    <br>

    <label>precio</label>
    <input type="number" name="precio" required>
    <br>

    <label>medida</label>
    <input type="number" name="talla" required>
    <br>

    <label>proveedor</label>
    <select class="form-control" name="proveedor" id="" required>
        <option disabled selected>selecciona un proveedor</option>
        <?php foreach ($this->model->Proveedor() as $p) : ?>
            <option value="<?php echo $p->id_proveedor ?>">
                <?php echo $p->nombre; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>

    <input type="submit" value="Guardar">
</form> -->