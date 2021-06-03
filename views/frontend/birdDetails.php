<section class="ftco-section">
    <div class="container">
    	
    	 <?php foreach($rowOfbirds as $aniB){?>
        <div class="row justify-content-center mb-3 pb-3">

            <?php echo'<h3 class="bold"><p>'.$aniB['name'].'</p></h3>' ?>
        </div>
            <div class="row">
                <?php echo '<div class="col-lg-5 mb-5 ftco-animate">
                    <img src="../images/birds/'.$aniB['image'].'" class="img-fluid"  alt="">'?>
                </div>

                <div class="col-lg-6 pl-md-5 ftco-animate heading" style="font: 20px;">
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">'.$aniB['given_name'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;">'.$aniB['dob'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">'.$aniB['gender'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">'.$aniB['life_span'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">'.$aniB['global_population'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">'.$aniB['date_joined'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">'.$aniB['height'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">'.$aniB['weight'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                <p style="color: black;">Habitat: '.$aniB['habitat'].'</p>
            </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Plummage Color: </p><p style="margin-left: 3%;">'.$aniB['plumage_color'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Dietary Requirement:  </p><p style="margin-left: 3%;">'.$aniB['diet'].' </p>'?>
                    </div>
                </div>
            </div>
            <?php echo '<div class="container row" style="font-size: 20px;">
                <p style="color: black;">Nest Construction Method: </p><p style="margin-left: 2%;"></p><p>'.$aniB['nest'].'</p>
            </div>'?>
            
        </div>
    <?php }?>
    </section>