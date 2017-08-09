<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title;?>
        <small><i class="fa fa-heart"></i> Future Leader Summit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Aktifitas Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="user_log" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th>Nama Pengguna</th>
                  <th>ID Pengguna</th>
                  <th>Jabatan</th>
                  <th>Aktifitas</th>
                  <th>Tanggal</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                  foreach ($this->Main_model->getAktifitasUser() as $data) {
                    //-> Kondisi tambahan untuk merubah angka menjadi text yang kita inginkan
                    ?>
                      <tr>
                        <td><?=$data['user_nama'];?></td>
                        <td><?=$data['user_email'];?></td>
                        <td><?=$data['user_role'];?></td>
                          <?php //sementara pakai kondisi dulu..
                            if ($data['log_jenis'] == 0) {
                              $akti = "Pengguna Logout";
                              $bg = "red";
                            }else if($data['log_jenis'] == 1){
                              $akti = "Pengguna Login";
                              $bg = "green";
                            }
                          ?>
                          <td><span class="badge bg-<?=$bg;?>"><?=$akti;?></span></td>
                        <td><?=$data['log_waktu'];?></td>
                      </tr>
                      <?php
                    }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
