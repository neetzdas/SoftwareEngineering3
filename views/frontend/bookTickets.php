<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row block-9 justify-content-center">
            <div class="col-md-8 ">
          <form action="bookTickets" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
                    <div class="form-group text-center text-bold" style="font-weight: bold;">
                        <h3>Book Tickets</h3>
                    </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>E-Mail Adress</label>
                    <input type="text" id="email" name="email" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" id="contactNum" name="contactNum" class="form-control" required = "">
                </div>
 <div class="form-group">
                <label>Age Group</label>
                    <select class="form-control" name="age_group">
                <?php
                    $ageGrp = $cost_tb->findAll();
                    foreach($ageGrp as $row)
        echo '<option value="'.$row['cost_id'].'">'.$row['age_grp'].'</option>';
         ?>
        </select>
    </div>
    <div class="form-group">
                <label>Cost</label>
                    <select class="form-control" name="cost" id="cost">
                <?php
                    $cost = $cost_tb->findAll();
                    foreach($cost as $row)
        echo '<option value="'.$row['cost_id'].'">'.$row['cost'].'</option>';
         ?>
        </select>
    </div>

                <div class="form-group">
                    <label>Number of Tickets</label>
                    <input type="number" id="total_ticket" name="total_ticket" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submitBtn">Apply</button>
                </div>
            </form>
         </div>

        <div class="col-md-4">
             <form action="" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data" style="border: 2px solid gray;">
                <div class="form-group">
                    <h3 class="text-center">Opening Times</h3>
                    <p>Monday-Friday<span style="margin-left: 50px;">9:30-4:30</span></p>
                    <p>Saturday-Sunday<span style="margin-left: 50px;">8:30-5:30</span></p>
                </div>
                <div class="form-group" >
                    <h3 class="text-center">Ticket Prices</h3>
                    <p>Age Group<span style="margin-left: 50px;">Cost per person</span></p>
                    <?php $cost = $cost_tb->findAll();
                    foreach($cost as $costP){
                    echo '<p>'.$costP['age_grp'].'<span style="margin-left: 100px;">'.$costP['cost'].'</span>'.'</p>';
                }
                    ?>
                </div>
             </form>
             
         </div>
        </div>
    </div>
</section>