  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-5-weight-bold text-primary">Proveedores</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
        <tr>
            <th>Nombre de proveedor</th>
            <th>Nit</th>
            <th>Correo electronico</th>
            <th>Nombre de contacto</th>
            <th>Celular de contacto</th>        
            <th>Acciones</th>
           
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
                <a href="?c=Proveedores&a=nuevo&id_proveedor=<?php echo $r->id_proveedor; ?>"  class="btn btn-info btn-flat"><i class="fas fa-sync-alt"></i></a>
                <a href="#"onclick="confirmarEliminar(<?=$r->id_proveedor?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    <!-- <a href="?c=Proveedores&a=Eliminar&id=<?=$r->id_proveedor;?>" class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></a> -->
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
</table> -->