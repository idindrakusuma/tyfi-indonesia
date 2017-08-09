
<?php
//-> URL for Kondisi
  $url = $this->uri->segment(2);
  $url2 = $this->uri->segment(1);
// -----------------------------------------------------------
?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php
          if ($this->session->user_foto == "") {
            ?>
              <img src="<?=base_url();?>assets/img/not_ready.png" class="img-circle" alt="User Image">
            <?php
          }
          else{
            ?>
              <img src="<?=base_url();?>uploads/<?=$this->session->user_foto;?>" class="img-circle" alt="User Image">
            <?php
          }
          ?>

        </div>
        <div class="pull-left info">
          <p><?=$this->session->user_nama ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Hai, <?=$this->session->user_role;?></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($url==""){echo 'class="active"';}?>>
          <a href="<?=base_url();?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Home</small>
            </span>
          </a>
        </li>
        <li class="header">2017</li>
        <li <?php if($url=="peserta"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/peserta"><i class="fa fa-user-plus"></i> <span>Daftar Pendaftar</span></a></li>


        <!-- menu marketing -->
        <li class="treeview <?php if($url=="peserta_lunas" || $url=="peserta_belum_lunas"){echo 'active';} ?>">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Pembayaran</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-down pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
           <li <?php if($url=="peserta_lunas"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/peserta_lunas"><i class="fa fa-arrow-circle-right"></i> Lunas</a></li>
            <li <?php if($url=="peserta_belum_lunas"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/peserta_belum_lunas"><i class="fa fa-arrow-circle-right"></i> Belum Lunas</a></li>
           </ul>
        </li> <!--end of menu marketing -->

         <!-- menu marketing -->
        <li class="treeview <?php if($url=="peserta_individu" || $url=="peserta_grup"){echo 'active';} ?>">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Model Pendaftar</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-down pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
           <li <?php if($url=="peserta_individu"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/peserta_individu"><i class="fa fa-arrow-circle-right"></i> Individu</a></li>
            <li <?php if($url=="peserta_grup"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/peserta_grup"><i class="fa fa-arrow-circle-right"></i> Grup</a></li>
           </ul>
        </li> <!--end of menu marketing -->

        <li class="treeview <?php if($url=="registrasi_1" || $url=="registrasi_2"){echo 'active';} ?>">
          <a href="#">
            <i class="fa fa-address-card"></i>
            <span>Registrasi Ulang</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-down pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
           <li <?php if($url=="registrasi_1"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/registrasi_1" onclick="return confirm('PERINGATAN! Fitur ini hanya boleh digunakan dihari pertama Acara. Buka registrasi ulang Hari Pertama, <?=$this->session->user_nama;?>?')"><i class="fa fa-arrow-circle-right"></i> Hari Pertama</a></li>
            <li <?php if($url=="registrasi_2"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/registrasi_2" onclick="return confirm('PERINGATAN! Fitur ini hanya boleh digunakan dihari kedua Acara, Buka registrasi ulang Hari Kedua, <?=$this->session->user_nama;?>?')"><i class="fa fa-arrow-circle-right"></i> Hari Kedua</a></li>
           </ul>
        </li> <!--end of registrasi ulang  -->


        <li <?php if($url=="feedback"){echo 'class="active"';}?>><a href="<?=base_url();?>admin/feedback"><i class="fa fa-comment"></i> Feedback Pengguna</a></li>


        <!-- end For Cutom website | Indra Kusuma -->
          <li class="header">SYSTEM</li>
           <li <?php if($url=="bantuan"){echo 'class="active"';}?>><a href="<?=base_url();?>"><i class="fa fa-question-circle text-red"></i> <span>Bantuan</span></a></li>
          <li <?php if($url=="gantiPassword"){echo 'class="active"';}?>><a href="<?=base_url();?>umum/gantiPassword"><i class="fa fa-unlock text-red"></i> <span>Ganti Password</span></a></li>

          </li> <!--end of menu user -->
          <li><a href="#" data-toggle="modal" data-target="#logoutConfirm"><i class="fa fa-lock text-red"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
