<div class="carousel slide" data-ride="carousel" id="carousel-1">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="jumbotron hero-nature carousel-hero">
        <h1 class="hero-title">PAWS PRINTS TO OUR HEART</h1>
        <p class="hero-subtitle">Lets get together and help animals</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="jumbotron hero-photography carousel-hero">
        <h1 class="hero-title">LETS GO WILD</h1>
        <p class="hero-subtitle">Come and experience the wild</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="jumbotron hero-technology carousel-hero">
        <h1 class="hero-title">PAWS PRINT TO OUR HEARTS</h1>
        <p class="hero-subtitle">We conserve endangered species</p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
      <i class="fa fa-chevron-right"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="ftco-section bg-light ftco-no-pt ftco-intro">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3 d-flex align-self-stretch px-3 ftco-animate">
        <div class="d-block services active text-center" style="background-image: url(../images/b1.jpg); transform: rotate(7deg);">
          <a href="allMammals"><div class="media-body">
            <span><i class="fa fa-paw"></i></span>
            <h3 class="heading">Housed Animals</h3>
          </div></a>
        </div>      
      </div>
        
      <div class="col-sm-6 col-lg-3 d-flex align-self-stretch px-3 ftco-animate">
        <div class="d-block services active text-center" style="background-image: url(../images/b2.jpg); transform: rotate(-7deg);">
          <a href="bookTickets"><div class="media-body">
            <span><i class="fas fa-ticket-alt"></i></span>
            <h3 class="heading">Book Tickets</h3>
          </div></a>
        </div>      
      </div>
          
      <div class="col-sm-6 col-lg-3 d-flex align-self-stretch px-3 ftco-animate">
        <div class="d-block services active text-center" style="background-image: url(../images/b3.jpg); transform: rotate(7deg);">
          <a href="sponsorFill"><div class="media-body">
            <span><i class="fas fa-donate"></i></span>
            <h3 class="heading">Apply For Sponsorship</h3>
          </div></a>
        </div>      
      </div>
          
      <div class="col-sm-6 col-lg-3 d-flex align-self-stretch px-3 ftco-animate">
        <div class="d-block services active text-center" style="background-image: url(../images/b4.jpg); transform: rotate(-7deg);">
          <a href="contact"><div class="media-body">
            <span><i class="far fa-map"></i></span>
            <h3 class="heading">Zoo Map</h3>
          </div></a>
        </div>      
      </div>
    </div>    
  </div>
</section>

<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>MEET OUR ANIMALS</h2>
      </div>
    </div>
    <div class="col-md-7 heading-section ftco-animate">
      <h3>Mammals</h3>
    </div>
    <hr>
    <div class="row">
      <?php foreach($animalsM as $aniM){?>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <?php echo'<div class="work mb-4 img d-flex align-items-end" style="background-image: url(../images/mammals/'.$aniM['image'].');">'?>
              <?php echo '<a href="../images/mammals/'.$aniM['image'].'" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>'?>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <?php echo '<h3><a href="work-single.html">'.$aniM['name'].'</a></h3>' ?>
                  <?php echo '<span>'. $aniM['given_name'].'</span>'?>
                  
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
      <div class="col-md-7 heading-section ftco-animate">
        <h3>Birds</h3>
      </div>
      <hr>
      <div class="row">
        <?php foreach($animalsB as $aniB){?>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <?php echo'<div class="work mb-4 img d-flex align-items-end" style="background-image: url(../images/birds/'.$aniB['image'].');">'?>
              <?php echo '<a href="../images/birds/'.$aniB['image'].'" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>'?>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <?php echo '<h3><a href="work-single.html">'.$aniB['name'].'</a></h3>' ?>
                  <?php echo '<span>'. $aniB['given_name'].'</span>'?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
      <div class="col-md-7 heading-section ftco-animate">
        <h3>Reptiles and Amphibians</h3>
      </div>
      <hr>
      <div class="row">
        <?php foreach($animalsR as $aniR){?>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <?php echo'<div class="work mb-4 img d-flex align-items-end" style="background-image: url(../images/reptiles/'.$aniR['image'].');">'?>
              <?php echo '<a href="../images/reptiles/'.$aniR['image'].'" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>'?>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <?php echo '<h3><a href="work-single.html">'.$aniR['name'].'</a></h3>' ?>
                  <?php echo '<span>'. $aniR['given_name'].'</span>'?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
      <div class="col-md-7 heading-section ftco-animate">
        <h3>Fishes</h3>
      </div>
      <hr>
      <div class="row">
        <?php foreach($animalsF as $aniF){?>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <?php echo'<div class="work mb-4 img d-flex align-items-end" style="background-image: url(../images/fishes/'.$aniF['image'].');">'?>
              <?php echo '<a href="../images/fishes/'.$aniF['image'].'" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>'?>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <?php echo '<h3><a href="work-single.html">'.$aniF['name'].'</a></h3>' ?>
                  <?php echo '<span>'. $aniF['given_name'].'</span>'?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
    </div>
  </section>