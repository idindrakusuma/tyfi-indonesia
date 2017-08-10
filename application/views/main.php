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
    <title><?=$judul;?> | TYF Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- infromasi website  -->
    <!-- SEO -->
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta name="author" content="TFY Indonesia">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style Website -->
    <link href="<?=base_url();?>assets/css/theme-style.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/colour-lime.css" id="colour-scheme" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/custom-style.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo/logo_tfy.png">
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
    <!-- ======== @Region: #highlighted ======== -->
    <?php $this->load->view("content/slideshow");?>
    <!-- ======== @Region: #content ======== -->
    <div id="content" class="p-0">
      	<!-- isi konten -->
      	<?php $this->load->view("content/main_content");?>
    	<!-- ======== @Region: #footer ======== -->
    	<?php $this->load->view("layouts/footer");?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/script.min.js"></script>
  </body>
</html>
