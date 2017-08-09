<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=$title;?>
      <small><i class="fa fa-heart"></i> FLS</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ganti Password</li>
      </ol>
  </section>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- check flash data -->
          <?php
            $info = $this->session->flashdata('info');
            if (isset($info)) {
              ?>
                <div class="callout callout-warning">
                  <h4>Opps ! Ada yang salah nih <?=$_SESSION['user_nama'];?></h4>
                  <p><?=$info;?></p>
                </div>
              <?php
            }
          ?>
          <!-- general form elements -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Kamu yakin mau ganti password, <?=$_SESSION['user_nama'];?> ?</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('umum/checkPassword/'.$_SESSION['user_id'])?>
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Password Lama</label>
                  <?php echo form_input(array('type'=>'password','name'=>'password_old','class'=>'form-control','placeholder'=>'Masukan Password lama kamu..','required'=>'required')) ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password Baru</label>
                  <?php echo form_input(array('type'=>'password','name'=>'password_new','class'=>'form-control','placeholder'=>'Masukan Password baru kamu..','required'=>'required')) ?>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" required=""> Saya yakin mau ganti Password!
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-warning " onclick="history.go(-1);"><i class="fa fa-close"></i> Batalkan</button>
                <button type="submit" class="btn btn-primary" value="gantiPassword" name="gantiPassword"><i class="fa fa-check"></i> Ganti Password Saya</button>
              </div>
              <?php echo form_close()?>
          </div>
          <!-- /.box -->
      </div>
</section>
</div>
