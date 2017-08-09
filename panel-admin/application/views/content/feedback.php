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
              <table id="feedback" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Pengirim</th>
                  <th>Email</th>
                  <th>Tanggal Masuk</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 0;
                  foreach ($feedback as $data) {
                    //-> Kondisi tambahan untuk merubah angka menjadi text yang kita inginkan
                    $no = $no + 1;
                    ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$data['nama_pengirim'];?></td>
                        <td><?=$data['email_pengirim'];?></td>
                        <td><?=$data['tanggal_dikirim'];?></td>
                        <td>
                          <?php
                            if ($data['is_periksa'] == 1) {
                              echo "<span class='badge bg-green'> Sudah Diperiksa</span>";
                            }else{ if($data['is_periksa'] == 0)
                              echo "<span class='badge bg-yellow'> Belum Diperiksa</span>";
                            }
                          ?>
                        </td>
                        <td>  <a href="<?=base_url();?>admin/detFeedback/<?=$data['id_feed'];?>" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> Lihat Pesan..</a>
                        </td>
                      </tr>
                    <?php
                } ?>
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
