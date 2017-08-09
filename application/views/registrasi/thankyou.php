<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="<?=base_url();?>assets/img/logo/fav.png" />
  <title>Terima Kasih!</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- SEO -->
    <meta content='#252422' name='theme-color'/>
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

  <!-- CSS Files -->
    <link href="<?=base_url();?>assets/registrasi/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/registrasi/css/paper-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url();?>assets/registrasi/css/demo.css" rel="stylesheet" />

  <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="<?=base_url();?>assets/registrasi/css/themify-icons.css" rel="stylesheet">
  <!-- google analystic -->
</head>

<body>
  <div class="image-container set-full-height" style="background-image: url('<?=base_url();?>assets/registrasi/img/background.png'); background-attachment: fixed;">
      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="red" id="wizardProfile">
                        <div class="wizard-header text-center">
                              <h3 class="wizard-title">Kamu berhasil mendaftar calon Peserta!</h3>
                          <p class="category">INConference 2017 "Overflow"</p>
                          <hr>
                          </div>
                            <div class="col-sm-4 col-sm-offset-1">
                                    <p class="description">
                                      <center>
                                        <img src="https://4.bp.blogspot.com/-grUByLLDtTQ/WSha8pAFyVI/AAAAAAAAF-8/gHXdF2x5E2oCnOiz5yehgIZilZtVu6qdACPcB/s1600/iconlogo-01.png" class="img-responsive" style="max-width: 60%"/>
                                      </center>
                                    </p><br>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Selamat,<!-- <?=$nama;?>! --> Berikut merupakan langkah kamu selanjutnya.</label>
                                    <p class="description">
                                      <ol>
                                        <li>Periksa email kamu <!-- [<?=$email;?>]. --></li>
                                        <li>Ikuti langkah - langkah yang tertera pada email balasan dari <i>inconference2017@gmail.com</i></li>
                                        <li>Selesai,</li>
                                      </ol>
                                    </p>
                                    <a href="<?=base_url();?>" class="btn btn-sm btn-danger"> Kembali ke Beranda</a>
                                    <a href="http://inconference2017.com/register" class="btn btn-sm btn-warning">Daftar Lagi</a> 
                                </div>
                            </div>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->

      <div class="footer">
          <div class="container text-center">
              Made with <i class="fa fa-heart heart"></i> by <a href="http://www.indrakusuma.web.id">Incoference 2017</a>.</a>
          </div>
      </div>
  </div>

</body>

  <!--   Core JS Files   -->
  <script src="<?=base_url();?>assets/registrasi/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/registrasi/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/registrasi/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

</html>
