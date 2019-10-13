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

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->id ?>" />
                <div class="form-group">
                    <label>Resume</label>
                    <input value="<?php echo $biodata->resume ?>" type="text" class="form-control" id="resume" placeholder="Resume" name="resume">
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" value="<?php echo $biodata->nama ?>" class="form-control" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label>JK</label>
                    <input type="text" value="<?php echo $biodata->jk ?>" class="form-control" id="jk" placeholder="Jenis Kelamin" name="jk">
                    <div class="invalid-feedback">
                        <?php echo form_error('jk') ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label>TTL</label>
                    <input value="<?php echo $biodata->ttl ?>" type="text" class="form-control" id="ttl" placeholder="TTL" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" value="<?php echo $biodata->agama ?>" class="form-control" id="agama" placeholder="Agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" value="<?php echo $biodata->alamat ?>" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label>Email</label>
                    <input value="<?php echo $biodata->email ?>" type="text" class="form-control" id="email" placeholder="Email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>WA</label>
                    <input type="text" value="<?php echo $biodata->wa ?>" class="form-control" id="wa" placeholder="Wa" name="wa">
                    <div class="invalid-feedback">
                        <?php echo form_error('wa') ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="text" value="<?php echo $biodata->foto ?>" class="form-control" id="foto" placeholder="foto" name="foto">
                    <div class="invalid-feedback">
                        <?php echo form_error('foto') ?>
                    </div>
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
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
    
</body>
</html>