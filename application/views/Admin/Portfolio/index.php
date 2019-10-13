<!DOCTYPE html>
<html lang="en">

<?php 
    $this->load->view("admin/partials/head.php")
?>

<body id="page-top">

  <?php 
        $this->load->view("admin/partials/navbar.php")
  ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
        $this->load->view("admin/partials/sidebar.php")
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php 
             $this->load->view("admin/partials/breadcrumbs.php")
        ?>
       <section class ="content">
          <div class="container-fluid">
            <div class="card">
            <div class="card-header">
              <h3 style="display:inline-block" class="card-title"> Data Portfolio </h3>
              <button style="float:right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Tambah Portfolio
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="exemple1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 20%;">Foto</th>
                    <th style="width: 12%;">Action</th>
                  </tr>
              </thead>
            <tbody>
            <?php foreach ($portfolio as $data){ ?>
                  <tr>
                    <td><?php echo $data->id?></td>
                    <td><?php echo $data->foto?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url('admin/portfolio/edit/'.$data->id)?>">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a type="button" rel="tooltip" title="Hapus" class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/portfolio/delete/'.$data->id)?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                    </a>
                   </td>
                    <!-- MODAL DELETE -->
                    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true" style="top:-100px|important;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapusLabel">Hapus Portfolio</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p style="text-align: center;">Apakah anda ingin menghapus data ini?</p>
                        <div class="modal-footer">
                          <a id="btn-delete">
                            <button type="submit" class="btn btn-danger btn-fill pull-left" style="margin-left: 40%;">Hapus</button>
                          </a>
                        </div>
                      </div>
                    </div>
                   </td>
               </tr>
            <?php
            }
            ?>
            </tfoot>
          </table>
          </div>
          <!-- /.card-body -->
          </div>
        </div>  <!-- /.container-fluid -->
      </section>
        <!-- /.content -->
  <!-- MODAL -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Portfolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?= base_url('admin/portfolio/add')?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>No</label>
                    <input type="text" name="id" class="form-control" placeholder="No . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Foto</label>
                    <input type="text" name="foto" class="form-control" placeholder="Nama . ." value="">
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div> 
          </div>
        </div>
      </div>    

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php 
         $this->load->view("admin/partials/footer.php")
      ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php 
    $this->load->view("admin/partials/scrolltop.php")
  ?>

  <!-- Logout Modal-->
  <?php 
    $this->load->view("admin/partials/modal.php")
  ?>

  <!-- Bootstrap core JavaScript-->
  <?php 
      $this->load->view("admin/partials/js.php")
  ?>
    <script>
      function deleteConfirm(url)
      {
        $('#btn-delete').attr('href', url);
        $('#hapus').modal();
      }
    </script>
</body>

</html>
