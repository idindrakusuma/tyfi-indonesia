<div id="about" class="py-3 pt-lg-6 pb-lg-4">
        <div class="container">
          <div data-animate="fadeIn" data-animate-duration="0.8">
            <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
            <h2 class="text-center font-weight-bold my-0">
              About TYF Indonesia 2017
            </h2>
            <h3 class="text-center font-weight-light mt-2 mb-0 text-muted">
               "Isi Temanya Disini"
            </h3>
            <hr class="mb-5 w-50 mx-auto" />
          </div>
          <div class="row pb-lg-6">
            <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.4" data-animate-offset="100%">
              
            <img src="<?=base_url();?>assets/img/logo/about_img.png"  class="img-thumbnail" alt="">
              
            </div>
            <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.8" data-animate-offset="100%">
              <p class="mb-0">Tabernacle Youth Fellowship (TYF) mulai terbentuk sejak 2009 dan mulai aktif melakukan kegiatan event nasional yang berawal di Surabaya. Selanjutnya TYF terus melakukan kegiatan nasional tahunan dengan berpindah kota dari daerah Jawa Barat, Jawa Tengah dan Jawa Timur. Ratusan anak muda telah terlibat dalam kepanitiaan dan ribuan anak muda dari berbagai daerah di Indonesia juga sudah mendapatkan sebuah dampak dari kegerakan TYF ini.</p><br>
              <button class="btn btn-inverse btn-invert b-1-em bg-merah" data-toggle="modal" data-target=".about-inconference" href="#">Selengkapnya</button><br/>
            </div>
          </div>
        </div>

        <?php $this->load->view("content/modal/m_about"); ?>