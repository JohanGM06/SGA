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
</form>