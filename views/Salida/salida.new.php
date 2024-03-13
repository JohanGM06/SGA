<a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Ventas&a=Guardar" method="post">

    <label>producto</label>
    <select class="form-control" name="producto" id="" required>
        <option disabled selected>selecciona un producto</option>
        <?php foreach ($this->model->Producto() as $p) : ?>
            <option value=<?php echo $p->id_producto ?>>
                <?php echo $p->nombre. " talla ". $p->talla; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>


            <label for="">Cantidad de ventas</label>
    <input type="number" id="cantidad" name="cantidad" value="0" required> <!-- Campo oculto para enviar la cantidad al servidor -->
    <br>



    <label>Nombre del cliente</label>
    <input type="text" name="cliente_nombre">
    <br>

    <label>n° documento del cliente</label>
    <input type="text" name="cliente_id">
    <br>

    <label>n° cel del cliente</label>
    <input type="text" name="cliente_contacto">
    <br>

    <label>direccion del cliente</label>
    <input type="text" name="cliente_direccion">
    <br>

    <label>Observaciones</label>
    <textarea name="observaciones" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="Guardar">
</form>
