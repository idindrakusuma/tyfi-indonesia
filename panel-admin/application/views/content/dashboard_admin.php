
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Beranda</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=$tot_peserta['jumlah'];?></h3>

              <p>Total Pendaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$tot_bayar['jumlah'];?></h3>

              <p>Pendaftar Sudah Bayar</p>
            </div>
            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta_lunas" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$tot_belum['jumlah'];?></h3>

              <p>Pendaftar Belum Bayar</p>
            </div>
            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta_belum_lunas" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$tot_feed['jumlah'];?></h3>

              <p>Feedback Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-chat"></i>
            </div>
            <a href="<?=base_url();?>admin/feedback" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=$jum_peserta['jumlah'];?></h3>

              <p>Total Calon Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php if (isset($peserta_bayar['jumlah'])) {
                ?>
                <h3><?=$peserta_bayar['jumlah'];?></h3>
                <?php
              } else{
                echo "<h3>0</h3>";
              }?>
              <p>Peserta Sudah Bayar</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-circled"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- belum bayar -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php if (isset($peserta_blm_bayar['jumlah'])) {
                ?>
                <h3><?=$peserta_blm_bayar['jumlah'];?></h3>
                <?php
              } else{
                echo "<h3>0</h3>";
              }?>
              <p>Peserta Belum Bayar</p>
            </div>
            <div class="icon">
              <i class="ion ion-help-circled"></i>
            </div>
            <a href="<?=base_url();?>admin/peserta" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
