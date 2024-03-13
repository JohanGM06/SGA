<a href="?c=Login&a=menu">volver</a>
<br>
<a href="?c=Ventas&a=nuevo">
    generar Venta
</a>
<br>
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th>Cantidad</th>
            <th>Cliente</th>
            <th>ID Cliente</th>
            <th>Observaciones</th>

            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->model->Listar() as $r) :
        ?>
            <tr>
                <td><?php echo $r->producto ?></td>
                <td><?php echo $r->fecha_venta ?></td>
                <td><?php echo $r->cantidad ?></td>
                <td><?php echo $r->cliente_nombre ?></td>
                <td><?php echo $r->cliente_id ?></td>
                <td><?php echo $r->observaciones ?></td>
                <td>
                    <a href="?c=Ventas&a=nuevo&id_salida=<?php echo $r->id_salida; ?>">
                        editar
                    </a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Ventas&a=Eliminar&id=<?php echo $r->id_salida; ?>">
                        eliminar
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>