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
</form>