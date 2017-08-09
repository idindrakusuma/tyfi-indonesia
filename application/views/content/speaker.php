<!--Customer testimonial-->
      <div id="pembicara" class="p-3 py-lg-6 bg-inverse">
        <div class="container">
          <div data-animate="fadeIn" data-animate-duration="0.6">
            <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
            <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
              SPEAKER
            </h2>
            <h3 class="text-center font-weight-light mt-2 mb-0 text-grey">
              Inconference 2017
            </h3>
            <hr class="mb-5 w-50 mx-auto" />
          </div>
          <!-- pembicara start -->

            <!-- The team -->
             <div class="team team-grid">
              <div class="row" data-toggle="isotope-grid" data-isotope-options='{"layoutMode": "fitRows", "itemSelector": ".grid-item"}'>
                
                <!-- Speaker -->
                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".cristofer" title="Christofer Tapiheru">
                      <img src="<?=base_url();?>assets/img/speaker/cristofer.png" class="img-thumbnail" alt="Christofer" />
                    </a>
                    <h5 class="name text-grey">
                      Christofer Tapiheru
                    </h5>
                    <p class="role text-grey">"The Call"</p>
                  </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".victor" title="Ps. Victor Waang">
                      <img src="<?=base_url();?>assets/img/speaker/victor.png" class="img-thumbnail" alt="Ps. Victor Waang" />
                    </a>
                    <h5 class="name text-grey">
                      Ps. Victor Waang
                    </h5>
                    <p class="role text-grey">"Gen Z Discipleship"</p>
                  </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".franky" title="Franky Kuncoro">
                      <img src="<?=base_url();?>assets/img/speaker/franky.png" class="img-thumbnail" alt="Franky Kuncoro" />
                    </a>
                    <h5 class="name text-grey">
                      Franky Kuncoro
                    </h5>
                    <p class="role text-grey">"Build the atmosphere"</p>
                  </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".yogi" title="Ps. Yogi Santoso">
                      <img src="<?=base_url();?>assets/img/speaker/yogi.png" class="img-thumbnail" alt="Ps. Yogi Santoso" />
                    </a>
                    <h5 class="name text-grey">
                      Ps. Yogi Santoso
                    </h5>
                    <p class="role text-grey">"Discipleship is Friendship"</p>
                  </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".raditya" title="Raditya Oloan">
                      <img src="<?=base_url();?>assets/img/speaker/raditya.png" class="img-thumbnail" alt="Raditya Oloan" />
                    </a>
                    <h5 class="name text-grey">
                      Raditya Oloan
                    </h5>
                    <p class="role text-grey">"Creative digital evangelism"</p>
                  </div>
                </div>
                
                <div class="col-6 col-sm-4 col-md-4 grid-item">
                  <div class="team-member">
                    <a href="#" data-toggle="modal" data-target=".gamaliel" title="Gamaliel Tapiheru & Audrey Tapiheru">
                      <img src="<?=base_url();?>assets/img/speaker/gamaliel.png" class="img-thumbnail" alt="Gamaliel Tapiheru & Audrey Tapiheru" />
                    </a>
                    <h5 class="name text-grey">
                      Gamaliel Tapiheru & Audrey Tapiheru
                    </h5>
                    <p class="role text-grey">"Youth with a mission"</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <?php $this->load->view('content/modal/m_speaker'); ?>