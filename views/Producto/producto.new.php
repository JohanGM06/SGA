<a href="?c=Login&a=menu">volver</a>
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
</form>