<div id="header">
      
      <div data-toggle="sticky">
        
        <!--Header search region - hidden by default -->
        <div class="header-search collapse" id="search">
          <form class="search-form container">
            <input type="text" name="search" class="form-control search" value="" placeholder="Search">
            <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
            <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
          </form>
        </div>
        
        <!--Header & Branding region-->
        <div class="header">

          <div class="header-inner container">
            <!--branding/logo -->
            <div class="header-brand flex-first">
               <a class="header-brand-text" href="<?=base_url();?>" title="Incoference 2017 | Overflow ">
                <img class="logo-kecil" src="<?=base_url();?>assets/img/logo/logo_tfy.png" alt="TYF 2018">
              </a>
              <div class="header-divider hidden-md-down"></div>
              <div class="header-slogan hidden-md-down"><b>#TYF2018!</b></div>
            
            </div>
            <!-- other header content -->
            <div class="header-block flex-lg-last">
              
              <!--Search trigger -->
              
              
              <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
              <a href="#top" class="btn btn-link btn-icon header-btn float-right hidden-lg-up" data-toggle="collapse" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars"></i> </a>
            </div>
            
            <div class="navbar navbar-toggleable-md navbar-toggleable-collapse">
              <!--everything within this div is collapsed on mobile-->
              <div class="navbar-main collapse">
                <!--main navigation-->
                <ul class="nav navbar-nav navbar-nav-onepager dropdown-effect-fade">
                  <li class="nav-item">
                    <a href="#top" data-toggle="scroll-link" class="nav-link"> <i class="fa fa-home nav-link-icon"></i> <span class="hidden-xs-up">Home</span> </a>
                  </li>
                  
                  <li class="nav-item"><a href="#about" data-toggle="scroll-link" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="#pembicara" data-toggle="scroll-link" class="nav-link">Speaker</a></li>
                  <li class="nav-item"><a href="#agenda" data-toggle="scroll-link" class="nav-link">Schedule</a></li>
                  
                  <li class="nav-item"><a href="#contact" data-toggle="scroll-link" class="nav-link">Contact Us</a></li>
                  <li class="nav-item register_now"><a href="<?=base_url();?>register" data-toggle="scroll-link" class="nav-link" style="color: #f1f1f1 !important;" >Register now!</a></li>
                </ul>
              </div>
              <!--/.navbar-collapse -->
            </div>
          </div>
        </div>
      </div>
    </div>