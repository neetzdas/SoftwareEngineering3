<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Fishes</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">View Fishes</a></li>
          <li class="breadcrumb-item active">List of Fishes</li>
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
                    <th style="text-align: center;">Average Temperature</th>
                    <th style="text-align: center;">Water Type</th>
                    <th style="text-align: center;">Color</th>
                    <th style="text-align: center;">Display</th>
                    <th style="text-align: center;">Author</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $fish_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($fishes_list as $rowOf_fish) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $fish_sn++ . '</td>';
                  echo '<td>' . $rowOf_fish['name'] . '</td>';
                  echo '<td>' . $rowOf_fish['given_name'] . '</td>';
                  echo '<td>' . $rowOf_fish['dob'] . '</td>';
                  echo '<td>' . $rowOf_fish['gender'] . '</td>';
                  echo '<td>' . $rowOf_fish['life_span'] . '</td>';
                  echo '<td>' . $rowOf_fish['diet'] . '</td>';
                  echo '<td>' . $rowOf_fish['global_population'] . '</td>';
                  echo '<td>' . $rowOf_fish['date_joined'] . '</td>';
                  echo '<td>' . $rowOf_fish['height'] . '</td>';
                  echo '<td>' . $rowOf_fish['weight'] . '</td>';
                  echo '<td><img src="../../images/fishes/'.$rowOf_fish['image'].'" style="width:50px;"></td>';
                  echo '<td>' . $rowOf_fish['temperature'] . '</td>';
                  echo '<td>' . $rowOf_fish['water_type'] . '</td>';
                  echo '<td>' . $rowOf_fish['color'] . '</td>';
                  echo '<td>' . $rowOf_fish['display'] . '</td>';
                  echo '<td>' . $rowOf_fish['added_by'] . '</td>';
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