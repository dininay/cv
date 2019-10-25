<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dini Naylul Izzah - Curriculum Vitae</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Portofolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class=<?php echo $info ['foto']?>>
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"><?php echo $info ['nama']?></h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?php echo $info ['info']?></h2>
        <a href="https://wa.me/6282265293431?text=Hallo Dini, Saya Tertarik dengan CV Kamu" class="btn btn-primary js-scroll-trigger">CHAT ME ON WHATSAPP</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="projects-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-black mb-4">Hallo,</h2>
          <p class="text-black-50"><?php echo $biodata ['resume']?></p>
            </div>
      </div>
      <!-- <img src="img/ipad.png" class="img-fluid" alt=""> -->
      </div>
    </section>
      <section id="about" class="about-section text-center">
          <div class="container">
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" style="width:70%;" src=<?php echo $biodata ['foto']?> alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4 class="text-white-50 mb-0">Data Diri</h4>
              <table>
              <tr class="text-white-50 mb-0">
                <td class="depan" style="width:500px;">Nama </td>
                <td style="width:500px;">: <?php echo $biodata ['nama']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">Jenis Kelamin </td>
                <td>: <?php echo $biodata ['jk']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">Tempat Tanggal Lahir </td>
                <td>: <?php echo $biodata ['ttl']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">Agama </td>
                <td>: <?php echo $biodata ['agama']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">Alamat </td>
                <td>: <?php echo $biodata ['alamat']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">Email </td>
                <td>: <?php echo $biodata ['email']?></td>
              </tr>
              <tr class="text-white-50 mb-0">
                <td class="depan">No HP </td>
                <td>: <?php echo $biodata ['wa']?></td>
              </tr>
              </table>
              </div>
          </div>
        </div>
    </div>
  </section>

  <!-- Projects Section -->
  

      <!-- Project One Row -->
      <section id="about" class="projects-section">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-black text-center h-100 project">
                  <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-left">
                      <h4 class="text-white">Pendidikan</h4>
                      <ul class="mb-0 text-white-50">
                        <?php
                          foreach($pendidikan as $data){
                            ?>
                            <li>
                              <div class="content-text">
                                <h5 class="line-title"><?php echo $data->nama_pen ?></h5>
                                <span><?php echo $data->waktu_pen?></span>
                                <p class="line-text"><?php echo $data->ket_pen?></p>
                              </div>
                            </li> <?php
                          }
                        ?>
                        </ul>
                        <hr class="d-none d-lg-block mb-0 ml-0">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 order-lg-first">
                  <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                      <div class="project-text w-100 my-auto text-center text-lg-left">
                        <h4 class="text-white">Pengalaman</h4>
                        <ul class="mb-0 text-white-50">
                        <?php
                          foreach($pengalaman as $data){
                            ?>
                            <li>
                              <div class="content-text">
                                <h5 class="line-title"><?php echo $data->nama_peng ?></h5>
                                <span><?php echo $data->waktu_peng?></span>
                                <p class="line-text"><?php echo $data->ket_peng?></p>
                              </div>
                            </li> <?php
                          }
                        ?>
                          </ul>
                        <hr class="d-none d-lg-block mb-0 mr-0">
                      </div>
                    </div>
                  </div>
                </div>
            </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        
        
    </div>
  </section>

  <!-- <section id="projects" class="projects-section">
      <div class="container"> -->
    <section id="projects" class=<?php echo $skill2['foto']?>>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
    
              <!-- <i class="far fa-paper-plane fa-2x mb-2 text-white"></i> -->
              <h2 class="text-white mb-5">Kemampuan</h2>
    
              <div class="row">
              <?php
                          foreach($skill as $data){
                            ?>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                      <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <li>
                              <div class="content-text">
                              <h4 class="text-uppercase m-0"><?php echo $data->nama_skill?></h4>
                              </div>
                            </li> 
                        <hr class="my-4">
                      </div>
                    </div>
                  </div>
                  <?php
                          }
                        ?>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section> 

  <!-- Contact Section -->
  <section id="signup" class="contact-section bg-black">
    <div class="container">
      
      <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

              <!-- <i class="far fa-paper-plane fa-2x mb-2 text-white"></i> -->
              <h2 class="text-white mb-5">Portofolio</h2>
    
              <div class="row">
              <?php
                          foreach($portfolio as $data){
                            ?>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              
              <h4 class="text-uppercase m-0">1</h4>
              <hr class="my-4">
              <div>
                    <img class="mb-3 mb-lg-0" style="width: 100%;" src=<?php echo $data->foto ?> alt="">
                </div>
              </div>
          </div>
        </div>
        <?php
                          }
                        ?>
      </div>

      <div class="social d-flex justify-content-center">
        <a href=<?php echo $ig ['link']?> class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
        <a href=<?php echo $fb ['link']?> class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; dininay 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/grayscale.min.js"></script>

</body>

</html>
