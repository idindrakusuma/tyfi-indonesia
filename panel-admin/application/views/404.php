<!--
========================================================
This Website using original template from AdminLTE
And redesign by Indra Kusuma
Author : Indra Kusuma
Website : www.indrakusuma.web.id
Email : indrakusuma.udinus@gmail.com
HAPPY CODING!
=========================================================
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title;?> | <?=$_SESSION['role_user']; ?></title>
	<meta name="description" content="System Backend BAI">
	<meta name="author" content="Indra Kusuma">

	<!-- link css for external -->
	<!-- Bootstrap 3.3.6 -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  <?php
	  	// digunakan untuk mempercepat loading file
	  	if (isset($custom_css)) {
	  		$this->load->view("custom/$custom_css");
	  	}
	  ?>

	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.css">
	  <!-- CSS Skin | Indra Kusuma -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/skin-green.css">
</head>
<body class="hold-transition">
	<div class="wrapper">
		<?php
			//menu -> menyesuiakan dengan tipe
			//content -> isi
			$this->load->view("$content");
			//copyright
			$this->load->view('layout/copyright');
			//footer
		 ?>
	</div>



	<!-- jQuery 2.2.3 -->
	<script src="<?=base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	<?php
		//for custom javascript
		if (isset($custom_js)) {
			$this->load->view("custom/$custom_js");
		}
	?>
	<!-- AdminLTE App -->
	<script src="<?=base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>assets/plugins/fastclick/fastclick.js"></script>
	<script src="<?=base_url();?>assets/js/app.min.js"></script>
	<?php
		//for custom script
		if (isset($custom_script)) {
			$this->load->view("custom/$custom_script");
		}
	?>

</body>
</html>
