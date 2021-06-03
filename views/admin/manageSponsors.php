<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sponsorships</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Sponsorships</a></li>
          <li class="breadcrumb-item active">List of Sponsorships</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header">
            <h4 class="box-title">Manage Birds</h4>
          </div>
        <!--form start-->
        <?php $sponsors_tb = $sponsors_tb->find('sponsor_id', $_GET['edit_Id'])->fetch(); ?>
        <form action="manageSponsors" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="sponsor_id" value="<?php echo $sponsors_tb['sponsor_id']; ?>" />
                    <label>Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" required = "" value="<?php echo $sponsors_tb['company_name'];?>">
                </div>

                <div class="form-group">
                    <label>E-Mail Adress</label>
                    <input type="text" id="email" name="email" class="form-control" required = "" value="<?php echo $sponsors_tb['email'];?>">
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" id="contactNum" name="contactNum" class="form-control" required = "" value="<?php echo $sponsors_tb['contactNum'];?>">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" id="address" name="address" class="form-control" required = "" value="<?php echo $sponsors_tb['address'];?>">
                </div>

                <div class="form-group">
                    <label>Animal to sponsor</label>
                    <input type="text" id="to_be_sponsored_animal" name="to_be_sponsored_animal" class="form-control" required = "" value="<?php echo $sponsors_tb['to_be_sponsored_animal'];?>">
                </div>

                <div class="form-group">
                    <label>Total Price</label>
                    <input type="string" id="total_price" name="total_price" class="form-control" required = "" value="<?php echo $sponsors_tb['total_price'];?>">
                </div>

                <div class="form-group">
                	<label>Animal Location</label>
                    <input type="text" id="animal_location" name="animal_location" class="form-control" required = "" value="<?php echo $sponsors_tb['animal_location'];?>">
                </div>

                <div class="form-group">
                	<label>Sponshorship band</label>
                    <input type="text" id="sponsorship_band" name="sponsorship_band" class="form-control" required = "" value="<?php echo $sponsors_tb['sponsorship_band'];?>">
                </div>

                <div class="form-group">
                        <label for="">Agreement Period</label>
                        <select class="form-control" name="agreement_period">
                        <option value="Half Year" <?php if ($sponsors_tb['agreement_period']=="Half Year") 
                        {echo 'selected';}
                    ?> >Half Year</option>
                        <option value="1 Year" <?php if ($sponsors_tb['agreement_period']=="1 Year") 
                        {echo 'selected';}
                    ?> >1 Year</option>
                    </select>
                    </div>

                <div class="form-group">
                    <label>Signage</label>
                    <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="agreed_display" id="agreed_display" type="file"> 
                                    </td>
                                    <td>
                                        <?php if(!empty($sponsors_tb['agreed_display']))
                                                 echo '<td><img src="../../images/signages/'.$sponsors_tb['agreed_display'].'" style="width:100px; height:100px;"></td>';
                                                ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Existing Customer</label>
                    <select class="form-control" name="existing_customer">
                        <option value="Yes" <?php if ($sponsors_tb['existing_customer']=="Yes") 
                        {echo 'selected';}
                    ?> >Yes</option>
                        <option value="No" <?php if ($sponsors_tb['existing_customer']=="No") 
                        {echo 'selected';}
                    ?> >No</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submitBtn">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>
</div>