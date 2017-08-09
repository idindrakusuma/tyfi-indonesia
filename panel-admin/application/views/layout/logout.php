<!-- modal untuk logout start -->
	<div class="modal modal-danger fade" id="logoutConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Konfirmasi Keluar</h4>
          </div>
          <div class="modal-body">
            Apakah Kamu benar - benar ingin <strong>keluar dari Panel Admin</strong> inconference2017, <?=$this->session->user_nama;?> ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Gak Jadi</button>
            <a href="<?=base_url();?>umum/logout" class="btn btn-danger"><i class="fa fa-check"></i> Logout Sekarang</a>
          </div>
        </div>
      </div>
    </div> <!-- akhir dari modal logout -->
