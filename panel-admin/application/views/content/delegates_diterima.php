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
        <li class="active">Calon Delegates</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Daftar Delegates yang Lolos Seleksi</h3>
              <h3 class="box-title pull-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>  Delegates Diterima</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="delegates" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th>No Registrasi</th>
                  <th>Room Pilihan</th>
                  <th>Nama</th>
                  <th>Kota Asal</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                      foreach ($this->Pid_model->getDelegatesDiterima(2) as $dg) {
                        ?>
                        <tr>
                          <td>FLS-<?=$dg['bio_id'];?></td>
                          <td><?=$dg['room1'];?></td>
                          <td><?=$dg['bio_nama'];?></td>
                          <td><?=$dg['kab_nama'];?></td>
                          <td>
                            <?php 
                              if ($dg['bio_terima'] == 0) {
                                ?>
                                  <span class="badge bg-yellow">Pending</span>
                                <?php
                              }else{
                                ?>
                                <span class="badge bg-purple"><i class="fa fa-check"></i> Diterima</span>
                                <?php
                              }
                            ?>
                          </td>
                          <td><a href="<?=base_url();?>pid/detDelegates/<?=$dg['bio_id'];?>" class="btn btn-info btn-xs "><i class="fa fa-eye"></i> Selengkapnya..</a></td>
                        </tr>
                        <?php
                      }
                    ?>
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
