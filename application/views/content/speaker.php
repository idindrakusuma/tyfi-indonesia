<!--Customer testimonial-->
<div id="pembicara" class="p-3 py-lg-6 bg-inverse">
  <div class="container">
    <div data-animate="fadeIn" data-animate-duration="0.6">
      <hr class="hr-lg mt-0 mb-3 w-10 mx-auto border-putih" />
      <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
        SPEAKER
      </h2>
      <h3 class="text-center font-weight-light mt-2 mb-0 text-grey">
        TYF Indonesia 2018
      </h3>
      <hr class="mb-5 w-50 mx-auto border-putih" />
    </div>
    <!-- pembicara start -->

    <!-- The team -->
    <div class="team team-grid">
      <div class="row" data-toggle="isotope-grid" data-isotope-options='{"layoutMode": "fitRows", "itemSelector": ".grid-item"}'>

        <!-- Speaker -->
        <div class="col-6 col-sm-4 col-md-4 grid-item">
          <div class="team-member">
            <a href="#" data-toggle="modal" data-target=".speaker1" title="Ps. Elijah Soetopo">
                      <img src="<?=base_url();?>assets/img/speaker/speaker.png" class="img-thumbnail" alt="Christofer" />
                    </a>
            <h5 class="name text-grey">
              Ps. Elijah Soetopo
            </h5>
            <p class="role text-grey">"Sebutan Speakernya.."</p>
          </div>
        </div>

        <div class="col-6 col-sm-4 col-md-4 grid-item">
          <div class="team-member">
            <a href="#" data-toggle="modal" data-target=".speaker2" title="Chris Tetuko">
                      <img src="<?=base_url();?>assets/img/speaker/speaker.png" class="img-thumbnail" alt="Ps. Victor Waang" />
                    </a>
            <h5 class="name text-grey">
              Chris Tetuko
            </h5>
            <p class="role text-grey">"Sebutan Speakernya.."</p>
          </div>
        </div>

        <div class="col-6 col-sm-4 col-md-4 grid-item">
          <div class="team-member">
            <a href="#" data-toggle="modal" data-target=".speaker3" title="Andy Korinto">
                      <img src="<?=base_url();?>assets/img/speaker/speaker.png" class="img-thumbnail" alt="Franky Kuncoro" />
                    </a>
            <h5 class="name text-grey">
              Andy Korinto
            </h5>
            <p class="role text-grey">"Sebutan Speakernya.."</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('content/modal/m_speaker'); ?>