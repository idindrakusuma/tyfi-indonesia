<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/logo/logo_tfy.png">
	<title>Registrasi Peserta TYF Indonesia 2017</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- SEO -->
	<meta name="keyword" content="Tabernacle Youth Fellowship (TYF), tyf, tyf indonesia 2018">
    <meta name="description" content="Tabernacle Youth Fellowship (TYF) mulai terbentuk sejak 2009 dan mulai aktif melakukan kegiatan event nasional yang berawal di Surabaya. Selanjutnya TYF terus melakukan kegiatan nasional tahunan dengan berpindah kota dari daerah Jawa Barat, Jawa Tengah dan Jawa Timur. ">
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:image" content="<?=base_url();?>assets/img/slides/slide_1.jpg" />
    <meta name="author" content="TFY Indonesia">

	<!-- CSS Files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">

	<link href="<?=base_url();?>assets/registrasi/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?=base_url();?>assets/registrasi/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">
	<!-- google analystic -->
</head>

<body>
	<!-- ubah background disini -->
	<div class="image-container set-full-height" style="background-image: url('<?=base_url();?>assets/img/slides/slide_1.jpg'); background-attachment: fixed;">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="azure" id="wizardProfile">
		                    <?php echo form_open("submit"); ?>
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Registrasi Peserta</h3>
									<p class="category">TFYI Indonesia 2017</p>
		                    	</div>

								<?php $this->load->view('registrasi/nav_reg'); ?>
		                        <div class="tab-content">
		                        <?php
		                        	$this->load->view('registrasi/konten/syarat');
		                        	$this->load->view('registrasi/konten/biodata');
		                        	$this->load->view('registrasi/konten/gereja');
		                        ?>

		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-primary' name='next' value='Lanjut' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-primary' name='finish' value='Kirim' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default' name='previous' value='Kembali' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    <?php echo form_close(); ?>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Made with <i class="fa fa-heart heart"></i> by <a href="https://indrakusuma.web.id">TYF Indonesia 2017</a>.</a>
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?=base_url();?>assets/registrasi/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?=base_url();?>assets/registrasi/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script src="<?=base_url();?>assets/registrasi/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/registrasi/js/paper-bootstrap-wizard.js" type="text/javascript"></script>



</html>
