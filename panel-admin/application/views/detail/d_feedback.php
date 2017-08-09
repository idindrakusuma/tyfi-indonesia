  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Feedback Pengguna
        <small>#<?=$detail['id_feed'];?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Feedback</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-heart"></i> INConference 2017
            <small class="pull-right">Admin Panel</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong><?=$detail['nama_pengirim'];?></strong><br>
            Email: <a href="mailto:<?=$detail['email_pengirim'];?>?subject=Balasan - INConference"><?=$detail['email_pengirim'];?></a>
            <br>Time : <strong><?=$detail['tanggal_dikirim'];?></strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>INConference 2017</strong><br>
            Semarang, Indonesia<br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-12">
          <p class="lead">Subjek : <strong>Feedback</strong></p>

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              <?=$detail['pesan_pengirim'];?><br>
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="#" onclick="window.print()" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Cetak</a>
          <?php
            if ($detail['is_periksa'] == 0) {
              ?>
              <a class="btn btn-warning" data-toggle="modal" data-target="#feedbackConfirm"><i class="fa fa-warning"></i> Tandai Sudah Diperiksa</a>
              <?php
            }
              else{
                ?>
                <a href="#" onclick="history.go(-1);" class="btn btn-success"><i class="fa fa-check"></i> Sudah Diperiksa</a>
                <?php
              }
          ?>
          <a onclick="history.go(-1);" target="_blank" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

     <!-- Modal -->
<div class="modal fade" id="feedbackConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body">
        <p>Feedback dari <strong><?=$detail['nama_pengirim'];?></strong> beneran udah kamu periksa, <?=$this->session->user_nama;?> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Batalkan</button>
        <a href="<?=base_url();?>admin/updateFeedback/<?=$detail['id_feed'];?>/<?=$this->session->user_id;?>" class="btn btn-success"><i class="fa fa-check"></i> Sudah</a>
      </div>
    </div>
  </div>
</div>
  </div>
