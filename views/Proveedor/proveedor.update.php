<a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Proveedores&a=Guardar" method="post">

<input type="hidden" name="id_proveedor" value="<?php echo $alm[0]->id_proveedor ?>">

    <label>nombre del producto</label>
    <input type="text" name="nombre" value="<?php echo $alm[0]->nombre ?>" required>
    <br>

    <label>nit</label>
    <input type="number" name="nit" value="<?php echo $alm[0]->nit ?>" required>
    <br>

    <label>correo</label>
    <input type="text" name="correo" value="<?php echo $alm[0]->correo ?>" required>
    <br>

    <label>nombre del contacto</label>
    <input type="text" name="contacto_nombre" value="<?php echo $alm[0]->contacto_nombre ?>">
    <br>
    
    <label>numero del contacto</label>
    <input type="number" name="contacto_cel" value="<?php echo $alm[0]->contacto_cel ?>">
    <br>

    <input type="submit" value="Guardar">
</form>