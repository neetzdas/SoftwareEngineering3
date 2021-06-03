<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Bookings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Bookings</a></li>
          <li class="breadcrumb-item active">List of Bookings</li>
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
            <h4 class="card-title" >List of Bookings</h4>
      </div>
          <div class="card-body table-responsive p-0">
                <table id ="dataList" class="table table-hover text-nowrap">
              <thead>
                <tr>
                	<th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Contact Number</th>
                    <th style="text-align: center;">Age Group</th>
                    <th style="text-align: center;">Total Tickets</th>
                    <th style="text-align: center;">Cost</th>
                  	<th style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $booking_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($bookings_list as $rowOf_booking) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $booking_sn++ . '</td>';
                  echo '<td>' . $rowOf_booking['fullName'] . '</td>';
                  echo '<td>' . $rowOf_booking['email'] . '</td>';
                  echo '<td>' . $rowOf_booking['contactNum'] . '</td>';
                  echo '<td>' . $rowOf_booking['age_group'] . '</td>';
                  echo '<td>' . $rowOf_booking['total_ticket'] . '</td>';
                  echo '<td>' . $rowOf_booking['cost'] . '</td>';
                  ?> 
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='manageBookings&del_Id=<?php echo $rowOf_booking['id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
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