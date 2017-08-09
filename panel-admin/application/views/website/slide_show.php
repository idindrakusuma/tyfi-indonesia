<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title;?>
        <small>BAI Online System</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
         <div class="col-md-12">
          <div class="box box-success">
          <div class="box-header">
              <?php
                $info = $this->session->flashdata('info');
                if (isset($info)) {
                  ?>
                    <div class="callout callout-warning">
                      <h4><?=$info;?></h4>
                    </div>
                  <?php
                }
              ?>
              <h3 class="box-title">Kegiatan Rutin</h3>
              <a href="<?=base_url();?>admin/addEvent" title="" class="btn btn-sm btn-primary btn-flat pull-right"><i class="fa fa-plus-circle"> </i> Tambah Kegiatan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>