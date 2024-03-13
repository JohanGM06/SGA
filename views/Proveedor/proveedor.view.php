<a href="?c=Login&a=menu">volver</a>
<br>
<a href="?c=Proveedores&a=nuevo">
    registrar nuevo proveedor
</a>
<br>
<table>
    <thead>
        <tr>
            <th>Nombre de Proveedor</th>
            <th>NIT</th>
            <th>Correo Electronico</th>
            <th>Nombre del contacto</th>
            <th>Telefono de contacto</th>
            						
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->model->Listar() as $r) :
        ?>
            <tr>
                <td><?php echo $r->nombre ?></td>
                <td><?php echo $r->nit ?></td>
                <td><?php echo $r->correo ?></td>
                <td><?php echo $r->contacto_nombre ?></td>
                <td><?php echo $r->contacto_cel ?></td>

                <td>
                    <a href="?c=Proveedores&a=nuevo&id_proveedor=<?php echo $r->id_proveedor; ?>">
                        editar
                    </a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Proveedores&a=Eliminar&id=<?php echo $r->id_proveedor; ?>">
                        eliminar
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>