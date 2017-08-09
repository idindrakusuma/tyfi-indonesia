<!--
========================================================
Web Developer : Indra Kusuma
Website : www.indrakusuma.web.id
Email : indrakusuma.udinus@gmail.com
HAPPY CODING!
=========================================================
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$judul;?> | Inconference 2017</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- infromasi website  -->
    <!-- SEO -->
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta name="author" content="Inconference 2017">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style Website -->
    <link href="<?=base_url();?>assets/css/theme-style.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/colour-lime.css" id="colour-scheme" rel="stylesheet">
    <link href="assets/css/custom-style.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo/fav.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!-- google analystic -->

  </head>

  <!-- ======== @Region: body ======== -->
  <body class="page page-onepager header-compact-sticky page-index-onepager navbar-layout-default">

    <!-- @plugin: page loading indicator, delete to remove loader -->
    <div class="page-loader" data-toggle="page-loader"></div>

    <a href="#content" id="top" class="sr-only">Skip to content</a>

    <!-- ======== @Region: #header ======== -->
    <?php $this->load->view("layouts/header");?>
    <!-- ======== @Region: #content ======== -->
    <div id="content" class="p-0">
        <!-- isi konten -->
        <div class="container pt-lg-6 pb-lg-4">
        <div class="row">
          <div class="col-md-8">
            <div class="w-90 mx-auto">
              <h3 class="error-code font-xs-x7 font-md-x10">
                404 <i class="fa fa-file-text text-primary font-xs-x6 font-md-x8"></i>
              </h3>
              <h3 class="error-message font-xs-x2 font-md-x2">
                Oops, Halaman yang Anda cari tidak tersedia..
              </h3>
              <p class="error-details font-xs-x1">Silahkan periksa kembali URL yang Anda masukan dan muat ulang aplikasi browser Anda.</p>
            </div>
          </div>
          <div class="col-md-4">
            <h4>
              Mungkin yang Anda cari :
            </h4>
            <ul class="list-unstyled list-lg list-bordered">
              <li><i class="fa fa-angle-right list-item-icon"></i> <a href="<?=base_url();?>">Home</a></li>
              <li><i class="fa fa-angle-right list-item-icon"></i> <a href="<?=base_url();?>">Registrasi</a></li>
              <li><i class="fa fa-angle-right list-item-icon"></i> <a href="<?=base_url();?>">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ======== @Region: #footer ======== -->
      <?php $this->load->view("layouts/footer");?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/script.min.js"></script>
  </body>
</html>


