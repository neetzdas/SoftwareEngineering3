<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Reptiles</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">View Reptiles</a></li>
          <li class="breadcrumb-item active">List of Reptiles</li>
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
          <div class="card-body table-responsive p-0">
                <table id ="dataList" class="table table-hover text-nowrap">
              <thead>
                <tr>
                	<th style="text-align: center;">Id</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Given Name</th>
                    <th style="text-align: center;">Date of Birth</th>
                    <th style="text-align: center;">Gender</th>
                    <th style="text-align: center;">Average Life Span</th>
                    <th style="text-align: center;">Diet</th>
                    <th style="text-align: center;">Global Population</th>
                    <th style="text-align: center;">Joined In</th>
                    <th style="text-align: center;">Height</th>
                    <th style="text-align: center;">Weight</th>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Reproduction Type</th>
                    <th style="text-align: center;">Clutch Size</th>
                    <th style="text-align: center;">Average Offspring</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Author</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $reptile_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($reptiles_list as $rowOf_reptile) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $reptile_sn++ . '</td>';
                  echo '<td>' . $rowOf_reptile['name'] . '</td>';
                  echo '<td>' . $rowOf_reptile['given_name'] . '</td>';
                  echo '<td>' . $rowOf_reptile['dob'] . '</td>';
                  echo '<td>' . $rowOf_reptile['gender'] . '</td>';
                  echo '<td>' . $rowOf_reptile['life_span'] . '</td>';
                  echo '<td>' . $rowOf_reptile['diet'] . '</td>';
                  echo '<td>' . $rowOf_reptile['global_population'] . '</td>';
                  echo '<td>' . $rowOf_reptile['date_joined'] . '</td>';
                  echo '<td>' . $rowOf_reptile['height'] . '</td>';
                  echo '<td>' . $rowOf_reptile['weight'] . '</td>';
                  echo '<td><img src="../../images/reptiles/'.$rowOf_reptile['image'].'" style="width:50px;"></td>';
                  echo '<td>' . $rowOf_reptile['reproduction_type'] . '</td>';
                  echo '<td>' . $rowOf_reptile['clutch'] . '</td>';
                  echo '<td>' . $rowOf_reptile['offspring'] . '</td>';
                  echo '<td>' . $rowOf_reptile['status'] . '</td>';
                  echo '<td>' . $rowOf_reptile['added_by'] . '</td>';

                  //actions taken
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