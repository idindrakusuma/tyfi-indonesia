<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title;?>
        <small><i class="fa fa-heart"></i> TYFI Indonesia 2017</small>
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
                  <th>Bayar ?</th>
                  <th>Tindakan</th>
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
                          <td>
                            <?php 
                              if ($dg['is_bayar'] == 0) {
                                ?>
                                  <span class="badge bg-yellow"><i class="fa fa-info"></i> Belum</span>
                                <?php
                              }else if($dg['is_bayar'] == 1){
                                ?>
                                <span class="badge bg-green"><i class="fa fa-check"></i> Sudah</span>
                                <?php
                              }
                            ?>
                          </td>
                          <td>
                          <?php if ($dg['is_bayar'] == 0) {
                            ?>
                              <a href="<?=base_url();?>Admin/hapusPeserta/<?=$dg['peserta_id'];?>" class="btn btn-danger btn-xs" title="Hapus Data Pendaftar #<?=$dg['peserta_id'];?>" onclick="return confirm('Yakin mau hapus data pendaftar #<?=$dg['peserta_id'];?> ?')"><i class="fa fa-trash"></i></a>
                            <?php 
                          } ?>
                          
                          <a href="<?=base_url();?>Admin/detPeserta/<?=$dg['peserta_id'];?>" class="btn btn-info btn-xs "><i class="fa fa-eye"></i> Selengkapnya</a></td>
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
