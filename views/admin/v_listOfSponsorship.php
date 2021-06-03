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
            <div class="card">
              <div class="card-header">
            <h4 class="card-title" >List of Sponsorships</h4>
      </div>
          <div class="card-body table-responsive p-0">
                <table id ="dataList" class="table table-hover text-nowrap">
              <thead>
                <tr>
                	<th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Company Name</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Contact Number</th>
                    <th style="text-align: center;">Address</th>
                    <th style="text-align: center;">Animal to be Sponsored</th>
                    <th style="text-align: center;">Total Price</th>
                    <th style="text-align: center;">Agreement Period</th>
                    <th style="text-align: center;">Sponsorship Band</th>
                    <th style="text-align: center;">Animal Location</th>
                    <th style="text-align: center;">Existing Customer</th>
                    <th style="text-align: center;">Signage</th>
                  	<th style="text-align: center;">Edit</th>
                  	<th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sponsor_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($sponsors_list as $rowOf_sponsor) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $sponsor_sn++ . '</td>';
                  echo '<td>' . $rowOf_sponsor['company_name'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['contactNum'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['email'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['address'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['to_be_sponsored_animal'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['total_price'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['agreement_period'] . '</td>';
                   echo '<td>' . $rowOf_sponsor['sponsorship_band'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['animal_location'] . '</td>';
                  echo '<td>' . $rowOf_sponsor['existing_customer'] . '</td>';
                  echo '<td><img src="../../images/signages/'.$rowOf_sponsor['agreed_display'].'" style="width:50px;"></td>';
                  
                  
                  //actions taken
                  echo '<td><a href="manageSponsors&edit_Id=' . $rowOf_sponsor['sponsor_id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> 
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='manageSponsors&del_Id=<?php echo $rowOf_sponsor['sponsor_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
                    </td>
                    <?php 
                    echo'</tr>';
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        <!-- /.row -->
  </div>
      <!-- /.container-fluid -->
</div>
    <!-- /.content -->