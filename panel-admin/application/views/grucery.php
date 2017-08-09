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
	<title><?=$title;?> | <?=$_SESSION['user_role']; ?></title>
	<meta name="description" content="FLS admin Panel">
	<meta name="author" content="Indra Kusuma">
	<!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>/assets/img/fav-fls.png">

		<!-- link css for external -->
	 	<!-- Ionicons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  <!-- CSS Skin | Indra Kusuma -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/skin-red.css">
	  <?php
	  	//grucery custom
		    if(isset($gcrud)){
		        foreach($css_files as $file){ ?>
		    	   <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /><?php
		        }
		        foreach($js_files as $file){ ?>
		    	   <script src="<?php echo $file; ?>"></script><?php
		        }
		    }
	   ?>

		 <!-- Bootstrap 3.3.6 -->
	 	  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	 		<!-- Font Awesome -->
	 	 <link rel="stylesheet" href="https://use.fontawesome.com/22056c94ff.css">
		 <!-- Theme style -->
	  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.css">

	  <style type="text/css">
	  	.modal-footer{
	  		margin-top: 0 !important;
	  	}
	  	@media (max-width: 991px){
	  		.main-header .navbar-custom-menu a, .main-header .navbar-right a{
	  			background: #dd4b39 !important;
	  		}
	  	}
	  </style>
		 <!-- google analystic-->
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
	<div class="wrapper">
		<?php
			//menu -> menyesuiakan dengan tipe
			//echo $_SESSION['role_user'];
			if ($_SESSION['user_role'] == "admin") {
				$this->load->view('layout/header_super');
				$this->load->view('layout/menu_super');
			}else{
				$this->load->view('layout/header_umum');
				$this->load->view('layout/menu_umum');
			}
			//content -> isi
			$this->load->view("$content");
			//copyright
			//footer
			$this->load->view('layout/copyright');
		 ?>
	</div>
	<!-- load modal for logout -->
	<?php $this->load->view('layout/logout'); ?>


	<!-- jQuery 2.2.3 -->
	<!-- AdminLTE App -->
	<script src="<?=base_url();?>assets/plugins/pace/pace.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>assets/plugins/fastclick/fastclick.js"></script>
	<script src="<?=base_url();?>assets/js/app.min.js"></script>
	<link rel="stylesheet" href="<?=base_url();?>assets/plugins/pace/pace.min.css">

	<script type="text/javascript">
	 function logout(){
		 var r = confirm("Kamu yakin mau keluar, <?=$_SESSION['user_nama'];?> ?");
		 if (r == true) {
			 window.location = "<?=base_url();?>/umum/logout";
		 }
	 },
	 $(document).ajaxStart(function() { Pace.restart(); });
 </script>


</body>
</html>
