<a href="?c=Login&a=menu">volver</a>
<br>
<a href="?c=Productos&a=nuevo">
    registrar nuevo producto
</a>
<br>
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Fecha de Recepcion</th>
            <th>Medida</th>
            <th>Ultima modificacion</th>
            <th>Proveedor</th>
            <th>Cantidad</th>

            <th>editar</th>
            <th>eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->model->Listar() as $r) :
        ?>
            <tr>
                <td><?php echo $r->nombre ?></td>
                <td><?php echo $r->precio ?></td>
                <td><?php echo $r->fecha_ingreso ?></td>
                <td><?php echo $r->talla ?></td>
                <td><?php echo $r->fecha_modificado ?></td>

                <?php foreach ($this->model->Proveedor() as $p) : ?>
                    <?php if (isset($r->proveedor) && ($r->proveedor == $p->id_proveedor)) { ?>
                        <td><?php echo $p->nombre ?></td><?php
                                                        }
                                                    endforeach; ?>

                <td>
                    <a href="?c=Productos&a=Cant&id_producto=<?php echo $r->id_producto ?>">
                        <?php echo $r->cantidad ?>
                    </a>
                </td>
                <td>
                    <a href="?c=Productos&a=nuevo&id_producto=<?php echo $r->id_producto; ?>">
                        editar
                    </a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Productos&a=Eliminar&id=<?php echo $r->id_producto; ?>">
                        eliminar
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>