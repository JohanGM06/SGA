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
</form>