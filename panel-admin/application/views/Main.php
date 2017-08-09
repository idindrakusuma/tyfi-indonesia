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
<htm>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title;?> | <?=$_SESSION['user_role']; ?></title>
	<meta name="description" content="Future Leader Summit Web Admin">
	<meta name="author" content="Indra Kusuma">
	<!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>/assets/img/fav-fls.png">

	<!-- link css for external -->
	<!-- Bootstrap 3.3.6 -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	  <!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
	  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/skin-red.css">
	  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/pace/pace.min.css">
		<!-- script for google analystic-->

		<script type="text/javascript">
			function logout(){
				var r = confirm("Kamu yakin mau keluar, <?=$_SESSION['user_nama'];?> ?");
				if (r == true) {
					window.location = "<?=base_url();?>/umum/logout";
				}
			}
		</script>
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
	<div class="wrapper">
		<?php
			//menu -> menyesuiakan dengan tipe
			//echo $_SESSION['role_user'];
			if ($_SESSION['user_role'] == "admin") {
				$this->load->view('layout/header_super');
				$this->load->view('layout/menu_super');
			}
			//content -> isi
			$this->load->view("$content");
			//copyright
			$this->load->view('layout/copyright');

		 ?>
	</div>

	<?php $this->load->view('layout/logout'); ?>

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
	<script src="<?=base_url();?>assets/plugins/pace/pace.min.js"></script>
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
	<script type="text/javascript">
		$(document).ajaxStart(function() { Pace.restart(); });
	</script>
</body>
</html>
