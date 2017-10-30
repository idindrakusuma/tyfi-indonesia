<!-- info organisasi/gereja-->
<div class="tab-pane" id="organisasi">
    <div class="row">
        <div class="col-sm-12">
            <h5 class="info-text"> Informasi Organisasi Kamu..</h5>
        </div>
        <div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Organisasi <small>*</small></label>
				<?php echo form_input(array('name'=> 'asal_organisasi', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'Nama Grup'));?>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Alamat Organisasi <small>*</small></label>
				<?php echo form_textarea(array('name'=> 'alamat_organisasi', 'class'=>'form-control','rows' => '3', 'placeholder'=>'Jalan Pandanaran nomor 10A,Semarang Barat,Semarang')); ?>
			</div>
		</div>

		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Fokus Organisasi <small>*</small></label>
				<?php echo form_input(array('name'=> 'pelayanan', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'Musik'));?>
			</div>
		</div>
    </div>
</div><!-- END//info organisasi/gereja-->
