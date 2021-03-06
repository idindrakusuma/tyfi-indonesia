<div id="about" class="py-3 pt-lg-6 pb-lg-4">
  <div class="container">
    <div data-animate="fadeIn" data-animate-duration="0.8">
      <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
      <h2 class="text-center font-weight-bold my-0">
        About TYF Indonesia 2018
      </h2>
      <h3 class="text-center font-weight-light mt-2 mb-0 text-muted">
        "Isi Temanya Disini"
      </h3>
      <hr class="mb-5 w-50 mx-auto" />
    </div>
    <div class="row pb-lg-6">
      <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.4" data-animate-offset="100%">

        <img src="<?=base_url();?>assets/img/logo/about_img.png" class="img-thumbnail" alt="">

      </div>
      <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.8" data-animate-offset="100%">
        <p class="mb-0">Tabernacle Youth Fellowship (TYF) mulai terbentuk sejak 2009 dan mulai aktif melakukan kegiatan event nasional yang
          berawal di Surabaya. Selanjutnya TYF terus melakukan kegiatan nasional tahunan dengan berpindah kota dari daerah
          Jawa Barat, Jawa Tengah dan Jawa Timur.</p><br>
          <h4 class="mb-1 font-weight-bold">
            Waktu & Tempat
          </h4>
          <p class="mb-1">
            <abbr title="Address"><i class="fa fa-calendar-o pr-2"></i></abbr> Yogyakarta, 26 - 28 Juni 2018
          </p>
          <p class="mb-1">
            <abbr title="Address"><i class="fa fa-building-o pr-2"></i></abbr> Edu Hostel
          </p>
          <p class="mb-1">
            <abbr title="Address"><i class="fa fa-map-marker pr-2"></i></abbr>  Jl. Let Jen Suprapto No. 17, Ngampilan, Yogyakarta
          </p>
          <br>
        <button class="btn btn-inverse btn-invert b-1-em bg-merah" data-toggle="modal" data-target=".about-inconference" href="#">Selengkapnya</button><br/>
      </div>
    </div>

    <!-- time and location -->

  </div>
  <?php $this->load->view("content/modal/m_about"); ?>