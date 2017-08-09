<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title;?>
        <small><i class="fa fa-heart"></i> INConference 2017</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$title;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <?php
            $info = $this->session->flashdata('info');
            if (isset($info)) {
              ?>
                <div class="callout callout-success" style="text-align:center;">
                  <h4 style="font-size:16px;"><i class="fa fa-check"></i><?=$info;?></h4>
                </div>
              <?php
            }
          ?>
          <div class="box box-danger">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="user_log" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>Tipe</th>
                  <th>Email</th>
                  <th>Kehadiran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                      foreach ($peserta as $dg) {
                        ?>
                        <tr>
                          <td><?=$dg['peserta_id'];?></td>
                          <td><?=$dg['nama'];?></td>
                          <td>
                            <?php 
                                if ($dg['j_kelamin'] == 'l') {
                                  echo "Laki-Laki";
                                }else {
                                  echo "Perempuan";
                                }
                            ?>
                          </td>
                          <td>
                            <?php if ($dg['tipe']=='1') {
                              echo "Individu";
                            } else if($dg['tipe']=='2'){
                              echo "Grup";
                              }?>
                          </td>
                          <td><?=$dg['email'];?></td>
                          
                            <?php 
                              if ($dg[$hari] == 0) {
                                ?> 
                                <td>
                                    <span class="badge bg-yellow"><i class="fa fa-info"></i> Belum Hadir</span>
                                </td>
                                <td>
                                  <a href="<?=base_url();?>Admin/pesertaHadir<?=$key;?>/<?=$dg['peserta_id'];?>/<?=$_SESSION['user_id']; ?>" class="btn btn-warning btn-xs "><i class="fa fa-info"></i> Tandai Sudah Hadir</a>
                                </td>
                                <?php
                              }else if($dg[$hari] == 1){
                                  $time = explode(" ", $dg['created_at']);
                                ?>
                                <td>
                                <span class="badge bg-green"><i class="fa fa-check"></i> Hadir pada <?=$time[1];?></span>
                                </td>

                                <td>
                                  <a href="#" class="btn btn-success btn-xs "><i class="fa fa-check"></i> Sudah Hadir</a>
                                </td>
                                <?php
                              }
                            ?>
                          
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
