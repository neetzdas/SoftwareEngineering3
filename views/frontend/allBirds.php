<section class="ftco-section">
			<div class="container"><div>
      <h3 class="text-center">All Housed Animals</h3>
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
                  <?php echo '<h3><a>'.$aniB['name'].'</a></h3>' ?>
                  <?php echo '<span>'. $aniB['given_name'].'</span>'?>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-lg-6" style="margin-bottom: 10px;">
              <?php echo '<a href="birdDetails&id='.$aniB['id'].'" class="btn btn-primary">Details</a>'?>
            </div>
            <div class="col-md-6 col-lg-6" style="margin-bottom: 10px;">
              <a href="sponsorFill" class="btn btn-primary">Sponsor</a>
            </div>
          </div>
          </div>
        <?php } ?>
      </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><span><a href="allMammals">1</a></span></li>
                <li><a href="allReptiles">2</a></li>
                <li class="active"><a href="allBirds">3</a></li>
                <li><a href="allFishes">4</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>