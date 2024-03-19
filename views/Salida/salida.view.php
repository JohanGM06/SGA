  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-5-weight-bold text-primary">Ventas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
        <tr>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th>Cantidad</th>
            <th>Cliente</th>
            <th>ID Cliente</th>
            <th>Celular Cliente</th>
            <th>Direccion Cliente</th>
            <th>Observaciones</th>
            <th>Acciones</th>
           
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
                <td><?php echo $r->cliente_contacto ?></td>
                <td><?php echo $r->cliente_direccion ?></td>
                <td><?php echo $r->observaciones ?></td>
                
                <td>    
                <a href="?c=Ventas&a=nuevo&id_salida=<?php echo $r->id_salida; ?>"  class="btn btn-info btn-flat"><i class="fas fa-sync-alt"></i></a>
                <a href="#"onclick="confirmarEliminar(<?=$r->id_salida?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>    
                    <!-- <a href="?c=Ventas&a=Eliminar&id=<?=$r->id_salida;?>" class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></a> -->
                </td>
                
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table> 
           






























<!-- 
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
</table> -->