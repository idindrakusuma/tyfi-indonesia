<!-- Contact form -->
<div id="contact">
  <div class="container p-4 py-lg-5">
    <div data-animate="fadeIn" data-animate-duration="0.6">
      <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
      <h2 class="text-center text-uppercase font-weight-bold my-0">
        Contact Us
      </h2>
      <h3 class="text-center font-weight-light mt-2 mb-0 text-muted" data-typed="Single sentance">
        Ada pertanyaan ? Tanyakan Kepada Kami
      </h3>
      <hr class="mb-5 w-50 mx-auto" />
    </div>
    <div class="row" data-animate="fadeIn" data-animate-delay="0.1">
      <div class="col-md-12 mb-5">
        <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.496546122318!2d110.42146300000002!3d-6.980004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ba1bc11f985c113!2sGereja+Bethel+Tabernakel+Kristus+Alfa+Omega!5e0!3m2!1sen!2sid!4v1502685743254"
            width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>
      </div>
      <div class="col-md-6">

        <?php
                $info = $this->session->flashdata('info');
                if (isset($info)) {
                  ?>
          <div class="alert alert-inverse" style="text-align:center;">
            <h4 style="font-size:14px;"><b>INFO :</b>
              <?=$info;?>
            </h4>
          </div>
          <?php
                }
              ?>
            <?php echo form_open('tambah-feedback')?>
            <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.2">
              <label class="sr-only" for="contact-name">Name</label>
              <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'nama','placeholder'=>'Nama Kamu..','required'=>'required')) ?>
            </div>
            <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.3">
              <label class="sr-only" for="contact-email">Email</label>
              <?php echo form_input(array('type'=>'email','class'=>'form-control','name'=>'email','placeholder'=>'Email Kamu..','required'=>'required')) ?>
            </div>
            <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.4">
              <label class="sr-only" for="contact-message">Message</label>
              <?php echo form_textarea(array('rows'=>'5','class'=>'form-control','placeholder'=>'Pesan Kamu..','name'=>'isi_pesan','required'=>'required'))?>
            </div>
            <input type="submit" class="btn btn-outline-primary btn-style btn-lg" value="Send Message">
            <?php echo form_close()?>
      </div>
      <div class="col-md-5 offset-md-1 mt-4 mt-md-0" data-animate="fadeIn" data-animate-delay="0.4">
        <h4 class="mb-1 font-weight-bold">
          TYF Indonesia
        </h4>
        <p class="mb-1">
          <abbr title="Address"><i class="fa fa-home pr-2"></i></abbr> Gajah Mada 114-118 Street, Semarang, 50138
        </p>
        <p class="mb-1">
          <abbr title="Telpon"><i class="fa fa-phone pr-2"></i></abbr> 081362171185
        </p>
        <p class="mb-1">
          <abbr title="Telpon"><i class="fa fa-envelope pr-2"></i></abbr> tyfindonesia@gmail.com
        </p>
        <p class="mb-0">
          <abbr title="Website"><i class="fa fa-globe pr-2"></i></abbr> tyfindonesia.com
        </p>
      </div>
    </div>
  </div>
</div>
</div>