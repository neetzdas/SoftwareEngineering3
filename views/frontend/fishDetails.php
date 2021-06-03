<section class="ftco-section">
    <div class="container">
    	
    	 <?php foreach($rowOffishes as $aniF){?>
        <div class="row justify-content-center mb-3 pb-3">

            <?php echo'<h3 class="bold"><p>'.$aniF['name'].'</p></h3>' ?>
        </div>
            <div class="row">
                <?php echo '<div class="col-lg-5 mb-5 ftco-animate">
                    <img src="../images/fishes/'.$aniF['image'].'" class="img-fluid" style="height:400px; width:550px;" alt="">'?>
                </div>

                <div class="col-lg-6 pl-md-5 ftco-animate heading" style="font: 20px;">
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">'.$aniF['given_name'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;">'.$aniF['dob'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">'.$aniF['gender'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">'.$aniF['life_span'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">'.$aniF['global_population'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">'.$aniF['date_joined'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">'.$aniF['height'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">'.$aniF['weight'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Water Type: </p><p style="margin-left: 3%;">'.$aniF['water_type'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Body Temperature :  </p><p style="margin-left: 3%;">'.$aniF['temperature'].' Degree Celsius</p>'?>
                    </div>
                </div>
            </div>
            <?php echo '<div class="container row" style="font-size: 20px;">
                <p style="color: black;">Dietary Requirement: </p><p style="margin-left: 2%;">'.$aniF['diet'].'</p>
            </div>'?>
            <?php echo '<div class="row container" style="font-size: 20px;">
                <p style="color: black; ">Habitat: </p><p>'.$aniF['habitat'].'</p>
            </div>'?>
        </div>
    <?php }?>
    </section>