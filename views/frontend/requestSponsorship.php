<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row block-9 justify-content-center">
            <div class="col-md-12 ">
          <form action="sponsorFill" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
                    <div class="form-group text-center text-bold" style="font-weight: bold;">
                        <h3>Apply for Sponsorship</h3>
                    </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" required = "">
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
                    <label>Address</label>
                    <input type="text" id="address" name="address" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Animal to sponsor</label>
                    <input type="text" id="to_be_sponsored_animal" name="to_be_sponsored_animal" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Total Price</label>
                    <input type="string" id="total_price" name="total_price" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <input type="hidden" id="animal_location" name="animal_location" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <input type="hidden" id="sponsorship_band" name="sponsorship_band" class="form-control" required = "">
                </div>

                <div class="form-group">
                        <label for="">Agreement Period</label>
                        <select class="form-control" name="agreement_period">
                        <option value="Half Year">Half Months</option>
                        <option value="1 Year">1 Year</option>
                    </select>
                    </div>

                <div class="form-group">
                    <label>Signage</label>
                    <input type="file" id="agreed_display" name="agreed_display" class="form-control">
                </div>

                <div class="form-group">
                    <label>Existing Customer</label>
                    <select class="form-control" name="existing_customer">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submitBtn">Apply</button>
                </div>
            </form>
         </div>
        </div>
    </div>
</section>