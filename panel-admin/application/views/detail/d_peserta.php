  <!-- Awal dari konten detail delegates -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Detail Informasi Peserta
        <small><i class="fa fa-heart"></i> INConference 2017</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Detail Peserta</a></li>
        <li class="active"><?=$peserta['peserta_id'];?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <div class="row"><!-- Awal dari Judul Form -->
      <?php
            $info = $this->session->flashdata('info');
            if (isset($info)) {
              ?>
                <div class="callout callout-success" style="text-align:center;">
                  <h4 style="font-size:14px;"><i class="fa fa-check"></i><?=$info;?></h4>
                </div>
              <?php
            }
          ?>
        <div class="col-md-12 col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-file-text-o"></i> <?=$peserta['nama'];?>
            <?php
              //memeriksa status formulir
              if ($peserta['is_bayar'] == 0) {
                ?>
                <small class="pull-right">Status : <strong class="text-yellow">Belum Bayar</strong></small>
                <?php
              }else{
                ?>
                  <small class="pull-right">Status : <strong class="text-green">Sudah Bayar</strong></small>
                <?php
              }
            ?>

          </h2>
        </div><!-- Akhir dari Judul Form -->

      </div>
      <!-- awal baris pertama antara pesertadata & pendidikan -->
      <div class="row">

        <div class="row"><!-- Awal dari informasi pesertadata delegates -->
          <div class="col-md-5 col-xs-12 col-md-offset-1">
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-user"></i>
                <h3 class="box-title">Detail Peserta</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <dl class="dl-horizontal">
                  <dt>Kode Pendaftaran</dt>
                    <dd><?=$peserta['peserta_id'];?></dd>
                  <dt>Nama</dt>
                    <dd><?=$peserta['nama'];?></dd>
                  <dt>Tanggal Lahir</dt>
                    <dd><?=$peserta['tgl_lahir'];?></dd>
                  <dt>Umur</dt>
                    <dd><?=$umur['umur'];?> tahun</dd>

                  <dt>Jenis Kelamin</dt>
                    <dd>
                      <?php if ($peserta['j_kelamin'] == "l") {
                        echo "Laki - Laki";
                      }else{
                          echo "Perempuan";
                          }
                      ?>

                    </dd>
                  <dt>Alamat Domisili</dt>
                    <dd><?=$peserta['alamat'];?></dd>
                  <dt>No HP/WA/LINE<dt>
                    <dd><?=$peserta['wa_line'];?></dd>
                  <dt>Email</dt>
                    <dd><?=$peserta['email'];?></dd>
                  <dt>Asal Gereja/Organisasi</dt>
                    <dd><?=$peserta['asal_organisasi'];?></dd>
                  <dt>Pelayanan</dt>
                    <dd><?=$peserta['pelayanan'];?></dd>
                  <dt>Daftar pada</dt>
                    <dd><?=$peserta['created_at'];?></dd>
                    <br>
                  <dt>Jenis Tagihan</dt>
                    <dd>
                      <?php if ($peserta['tipe']==1) {
                        echo "Individu";
                      }else{
                        echo "Grup (".$peserta['jumlah_peserta']." Orang)";
                        } ?>
                    </dd>
                  <dt>Total Tagihan</dt>
                    <dd>Rp. <?=$peserta['total_tagihan'];?></dd>

                    <dt>Status</dt>
                      <?php if ($peserta['is_bayar'] == 0) {
                        echo '<dd><span class="badge bg-yellow"><i class="fa fa-info"></i> Belum Bayar Biaya Registrasi</span></dd>';
                      } else if($peserta['is_bayar'] == 1){
                       echo '<dd><span class="badge bg-green"><i class="fa fa-check"></i> Sudah Bayar Biaya Registrasi</span></dd>';
                       echo '<dd>diverifikasi pada '.$peserta["update_at"].'</dd>';
                        }?>
                </dl>
              </div>
              <!-- /.box-body -->
            </div>
          </div><!-- Akhir dari informasi pesertadata delegates -->

          <div class="col-md-5 col-xs-12">
            <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-money"></i>
                <h3 class="box-title">Pembayaran</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <dl class="dl-horizontal">
                <?php if ($peserta['is_bayar'] == 1) {
                  ?>
                  <!-- jika sudah bayar -->
                    <dt>Nama Pengirim</dt>
                      <dd><?=$konfirmasi['nama_pengirim'];?></dd>
                    <dt>Bank Pengirim</dt>
                      <dd><?=$konfirmasi['bank_pengirim'];?></dd>
                    <dt>Catatan Tambahan</dt>
                      <dd><?=$konfirmasi['catatan'];?></dd>
                    <dt>Dikonfirmasi Panitia pada </dt>
                      <dd><?=$konfirmasi['tanggal_transaksi'];?></dd>

                  <?php
                } else{
                  ?>
                    <dt>Status Pembayaran</dt>
                      <dd><span class="badge bg-yellow"><i class="fa fa-info"></i> Belum Bayar Biaya Registrasi</span></dd>
                  <?php
                  } ?>
                </dl>
              </div>
          </div>
        </div><!-- akhir baris pertama antara pesertadata & pendidikan -->

      </div>
      <!-- row of prestasi dan pengalaman organisasi-->


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12 col-md-11 col-md-offset-1">
          <a href="#" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Cetak</a>
          <?php
          if ($peserta['is_bayar'] == 0) {
              ?>
              <a class="btn btn-warning" data-toggle="modal" data-target="#delegatesConfirm"><i class="fa fa-warning"></i> Tandai Sudah Bayar</a>
              <a class="btn btn-danger" href="<?=base_url();?>Admin/hapusPeserta/<?=$peserta['peserta_id'];?>" onclick="return confirm('Yakin mau hapus data pendaftar #<?=$peserta['peserta_id'];?> ?')"><i class="fa fa-trash"></i> Hapus Peserta</a>
              <?php
              }
              else{
                ?>
                <a href="<?=base_url();?>pdf/download/<?=$peserta['peserta_id'];?>" target="_blank" class="btn btn-primary"><i class="fa fa-file"></i> Download E-Ticket</a>
                <a href="#" onclick="history.go(-1);" class="btn btn-success"><i class="fa fa-check"></i> Sudah Bayar</a>
                <?php
              }
          ?>
          <a href="#" onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!--
        ================================================================================================
        Modal | Modal akan tampil jika status belum diperiksa dan user menekan tombol sudah diperiksa
        ================================================================================================
    -->
    <div class="modal fade" id="delegatesConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Konfirmasi Pembayaran</h4>
          </div>
          <div class="modal-body">
                <?php echo form_open('admin/verifikasi')?>
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Kode Peserta</label>
                    <input type="text" class="form-control" value="<?=$peserta['peserta_id'];?>" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama Peserta</label>
                    <input type="text" class="form-control" value="<?=$peserta['nama'];?>" disabled>
                  </div>
                </div>
                <!-- hidden value -->
                <input type="hidden" name="id_peserta" value="<?=$peserta['peserta_id'];?>">
                <input type="hidden" name="user" value="<?=$this->session->user_id;?>">
                <!-- end of hidden value -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama Pengirim</label>
                    <?php echo form_input(array('name'=>'nama_pengirim','class'=>'form-control','type'=>'text','placeholder'=>'Nama pengirim..','required'=>'required')) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Bank Pengirim</label>
                    <?php echo form_input(array('name'=>'bank_pengirim','class'=>'form-control','type'=>'text','placeholder'=>'Bank pengirim..','required'=>'required')) ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="recipien-name" class="control-label">Keterangan Tambahan</label>
                    <?php echo form_input(array('name'=>'ket_tambahan','class'=>'form-control','type'=>'text','placeholder'=>'Keterangan tambahan..')) ?>
                  </div>
                </div>
                </div>
                 <div class="row">
                  <div class="col-md-12"><p>Data milik <strong><?=$peserta['nama'];?></strong> beneran udah kamu periksa, <?=$this->session->user_nama;?> ?</p></div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Batalkan</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Verifikasi</button>
                </div>
                <?php echo form_close()?>

          </div>

        </div>
      </div>
    </div> <!-- akhir dari modal -->
  </div><!-- akhir dari konten detail delegates -->
