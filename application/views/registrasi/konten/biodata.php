
<!-- pribadi -->
<div class="tab-pane" id="pribadi">

	<div class="row">
		<h5 class="info-text"> Biodata Diri</h5>
		<!-- anda mendaftar sebagai ? -->
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Kamu Mendaftar Sebagai ? <small>*</small></label>
				<?php echo form_dropdown(array('name'=> 'jenis_peserta', 'class' => 'form-control', 'id'=> 'jenis_peserta'), array('1'=>'Individu', '2'=> 'Grup')); ?>
			</div>
		</div>
		<!-- jika mendaftar sebagai grup -->
		<div class="col-sm-10 col-sm-offset-1" id="if_grup" style="display:none">
			<div class="form-group">
				<label>Berapa jumlah orang dalam grup kamu ? <small>*</small></label>
				<?php echo form_input(array('name'=> 'jumlah', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'Minimal 2 maksimal 5'));?>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Nama <small>*</small></label>
				<?php echo form_input(array('name'=> 'nama', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'Nama Lengkap')); ?>
			</div>
		</div>
		<div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label>Jenis Kelamin <small>*</small></label>
                <?php echo form_dropdown(array('name'=> 'jenis_kelamin', 'class' => 'form-control'), array('l'=>'Laki-Laki', 'p'=> 'Perempuan')); ?>
            </div>
        </div>
		<div class="col-sm-5">
            <div class="form-group">
                <label>Tanggal Lahir <small>*</small></label>
                <?php echo form_input(array('name'=> 'tanggal_lahir', 'type'=>'text', 'class'=>'datepicker form-control', 'placeholder'=>'YYYY-MM-DD'));?>
            </div>
        </div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Alamat Domisili <small>*</small></label>
				<?php echo form_textarea(array('name'=> 'alamat', 'class'=>'form-control','rows' => '3', 'placeholder'=>'Jalan Pandanaran nomor 10A,Semarang Barat,Semarang')); ?>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Email <small>*</small></label>
				 <?php echo form_input(array('name'=> 'email', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'emailkamu@gmail.com'));?>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="form-group">
				<label>Whatsapp/LINE <small>*</small></label>
				 <?php echo form_input(array('name'=> 'hp', 'type'=>'text', 'class'=>'form-control', 'placeholder'=>'08927361263'));?>
			</div>
		</div>

	</div>
</div> <!-- END// pribadi -->
