<a href="?c=Login&a=menu">volver</a>
<br>
<form action="?c=Productos&a=Cantidad" method="post">

    <input type="hidden" name="id_producto" value="<?php echo $alm[0]->id_producto ?>">

    <label for="cantidad">Cantidad actual</label>
    <input type="text" readonly name="cantidad" value="<?php echo $alm[0]->cantidad ?>" required>
    <br>

    <input type="number" id="cantidad" name="cantidad" value="0"> <!-- Campo oculto para enviar la cantidad al servidor -->
    
    <input type="submit" value="Guardar">
</form>
