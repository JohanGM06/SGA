  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0-weight-bold text-primary">Usuarios</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead class="thead-dark">
                          <tr>
                              <th>Nombre de Usuario</th>
                              <th>Usuario</th>
                              <th>Permiso</th>
                              <th>Acciones</th>

                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            foreach ($this->model->Listar() as $r) :
                            ?>
                              <tr>
                                  <td><?php echo $r->nombre ?></td>
                                  <td><?php echo $r->usuario ?></td>
                                  <?php foreach ($this->model->Permiso() as $p) : ?>
                                      <?php if (isset($r->permiso) && ($r->permiso == $p->id_permiso)) { ?>
                                          <td><?php echo $p->detalles ?></td>
                                  <?php    }
                                    endforeach; ?>
                                  <td>
                                      <a href="?c=Usuarios&a=nuevo&id_usuario=<?php echo $r->id_usuario; ?>" class="btn btn-info btn-flat"><i class="fas fa-sync-alt"></i></a>
                                      <a href="?c=Usuarios&a=Eliminar&id=<?php echo $r->id_usuario; ?>" onclick="javascript:return confirm('¿Seguro de eliminar este Usuario?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                  </td>


                              </tr>
                          <?php
                            endforeach;
                            ?>
                      </tbody>
                  </table>