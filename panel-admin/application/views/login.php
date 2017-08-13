<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Silahkan login terlebih dahulu | TYF System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.css">

 <!-- background style -->
  <style type="text/css" media="screen">
    /* custom button */
    html{
      background-color: #e74c3c !important;
      color: #ecf0f1 !important;
    }

    .login-page{
      background-color: #e74c3c !important;
    }
  	.btn-primary{
  		background: #D96716; !important;
  		border-color: #D96716;;
  	}
  	.btn-primary:hover{
  		background: #e67e22;
  		border-color: #e67e22;
  	}

    .footer-new{
      color: #ecf0f1 !important;
    }
    /* custom link */
  	a{
  		color: #ecf0f1 !important;;
  	}
  	a:hover{
  		color: #fff !important;
  	}
  </style>
</head>
<body class="hold-transition login-page">
	<div class="login-box">
	  <div class="login-logo">
	    <a href="#"><b>TYF Indonesia 2017 </b>Panel Admin</a> <!--
	    <img src="<?=base_url();?>assets/img/logo-white.png" class="img img-responsive" alt="Logo Apps	"> -->
	  </div>
	  <!-- /.login-logo -->
	  <div class="login-box-body">
      <?php
        $info = $this->session->flashdata('info');
        if (isset($info)) {
          ?>
            <div class="callout callout-danger" style="text-align:center;">
              <h4 style="font-size:16px;"><?=$info;?></h4>
            </div>
          <?php
        }
      ?>
	    <p class="login-box-msg">Silahkan Masukan Email dan Password..</p>

	    <?php echo form_open() ?>
	      <div class="form-group has-feedback">
          <?php echo form_input(array('type'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'Email Kamu..')) ?>
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
          <?php echo form_input(array('type'=>'password','name'=>'password','class'=>'form-control','placeholder'=>'Password kamu..')) ?>
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
	        <div class="col-xs-8">
	          <div class="checkbox icheck">
	            <label>
	              <a href="#" title="" style="color:#555 !important;"><i class="glyphicon glyphicon-chevron-left"><b></i> Kembali ke Homepage</a></b>
	            </label>
	          </div>
	        </div>
	        <!-- /.col -->
	        <div class="col-xs-4">
	          <button type="submit" value="login" name="login" class="btn btn-primary btn-block btn-flat" style="border-radius:4px;">Masuk</button>
	        </div>
	        <!-- /.col -->
	      </div>
	    <?php echo form_close()?>
	  </div>
	  <!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<!-- /.content-wrapper -->
  <div class="footer-new">
    Copyright &copy; 2017. Make with <i class="glyphicon glyphicon-heart"></i> <a href="https://indrakusuma.web.id" style="color:#555;" title="Indra Kusuma">TYF Indonesia</a>. All rights
    reserved.
  </div>
	<!-- jQuery 2.2.3 -->
	<script src="<?=base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?=base_url();?>assets/plugins/iCheck/icheck.min.js"></script>

	</body>
</html>
