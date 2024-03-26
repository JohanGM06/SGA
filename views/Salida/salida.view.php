  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0-weight-bold text-primary">Ventas</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead class="thead-dark">
                          <tr>
                              <th>Producto</th>
                              <th>Fecha Venta</th>
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
                                  <?php foreach ($this->model->Producto() as $p) : ?>
                                      <?php if (isset($r->producto) && ($r->producto == $p->id_producto)) { ?>
                                          <td><?php echo $p->nombre ?></td>
                                  <?php    }
                                    endforeach; ?>
                                  <td><?php echo $r->fecha_venta ?></td>
                                  <td><?php echo $r->cantidad ?></td>
                                  <td><?php echo $r->cliente_nombre ?></td>
                                  <td><?php echo $r->cliente_id ?></td>
                                  <td><?php echo $r->cliente_contacto ?></td>
                                  <td><?php echo $r->cliente_direccion ?></td>
                                  <td><?php echo $r->observaciones ?></td>

                                  <td>
                                      <a href="?c=Ventas&a=nuevo&id_salida=<?php echo $r->id_salida; ?>" class="btn btn-info btn-flat"><i class="fas fa-sync-alt"></i></a>
                                  </td>

                              </tr>
                          <?php
                            endforeach;
                            ?>
                      </tbody>
                  </table>