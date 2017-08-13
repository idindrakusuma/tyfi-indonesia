<header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><i class="glyphicon glyphicon-heart"></i>I</b>17</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">TYF Indonesia <i class="glyphicon glyphicon-heart"></i></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php //cek user_foto
                if ($this->session->user_foto == "") {
                  ?>
                    <img src="<?=base_url();?>assets/img/not_ready.png"  class="user-image" alt="User Image">
                  <?php
                }else{
                  ?>
                  <img src="<?=base_url();?>uploads/<?=$this->session->user_foto;?>" class="user-image" alt="User Image">
                  <?php
                }
              ?>
              <span class="hidden-xs">Hai, <?=$this->session->user_nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
                  //cek user_foto
                  if ($this->session->user_foto == "") {
                    ?>
                    <img src="<?=base_url();?>assets/img/not_ready.png" class="img-circle" alt="User Image">
                    <?php
                  }else{
                    ?>
                    <img src="<?=base_url();?>uploads/<?=$this->session->user_foto;?>" class="img-circle" alt="User Image">
                    <?php
                  }
                ?>

                <p>
                  <?=$this->session->user_nama; ?>
                  <small>Hai, <?=$this->session->user_role; ?>!</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                  <a href="#" data-toggle="modal" data-target="#logoutConfirm" class="btn btn-danger btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
