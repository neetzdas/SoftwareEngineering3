<section class="ftco-section">
    <div class="container">
    	
    	 <?php foreach($rowOfMammals as $aniM){?>
        <div class="row justify-content-center mb-3 pb-3">

            <?php echo'<h3 class="bold"><p>'.$aniM['name'].'</p></h3>' ?>
        </div>
            <div class="row">
                <?php echo '<div class="col-lg-5 mb-5 ftco-animate">
                    <img src="../images/mammals/'.$aniM['image'].'" class="img-fluid" alt="">'?>
                </div>

                <div class="col-lg-6 pl-md-5 ftco-animate heading" style="font: 20px;">
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">'.$aniM['given_name'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;">'.$aniM['dob'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">'.$aniM['gender'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">'.$aniM['life_span'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">'.$aniM['global_population'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">'.$aniM['date_joined'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">'.$aniM['height'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">'.$aniM['weight'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gestational Period: </p><p style="margin-left: 3%;">'.$aniM['gestation'].'</p>
                    </div>'?>
                    <?php echo '<div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Body Temperature :  </p><p style="margin-left: 3%;">'.$aniM['temperature'].' Degree Celsius</p>'?>
                    </div>
                </div>
            </div>
            <?php echo '<div class="container row" style="font-size: 20px;">
                <p style="color: black;">Dietary Requirement: </p><p style="margin-left: 2%;">'.$aniM['diet'].'</p>
            </div>'?>
            <?php echo '<div class="row container" style="font-size: 20px;">
                <p style="color: black;">Habitat: </p><p>'.$aniM['habitat'].'</p>
            </div>'?>
        </div>
    <?php }?>
    </section>