<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Birds</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">View Birds</a></li>
          <li class="breadcrumb-item active">List of Birds</li>
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
                    <th style="text-align: center;">Clutch Size</th>
                    <th style="text-align: center;">WingSpan</th>
                    <th style="text-align: center;">Ability to Fly</th>
                    <th style="text-align: center;">Plummage Color</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Author</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $bird_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($birds_list as $rowOf_bird) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $bird_sn++ . '</td>';
                  echo '<td>' . $rowOf_bird['name'] . '</td>';
                  echo '<td>' . $rowOf_bird['given_name'] . '</td>';
                  echo '<td>' . $rowOf_bird['dob'] . '</td>';
                  echo '<td>' . $rowOf_bird['gender'] . '</td>';
                  echo '<td>' . $rowOf_bird['life_span'] . '</td>';
                  echo '<td>' . $rowOf_bird['diet'] . '</td>';
                  echo '<td>' . $rowOf_bird['global_population'] . '</td>';
                  echo '<td>' . $rowOf_bird['date_joined'] . '</td>';
                  echo '<td>' . $rowOf_bird['height'] . '</td>';
                  echo '<td>' . $rowOf_bird['weight'] . '</td>';
                  echo '<td><img src="../../images/birds/'.$rowOf_bird['image'].'" style="width:50px;"></td>';
                  echo '<td>' . $rowOf_bird['clutch'] . '</td>';
                  echo '<td>' . $rowOf_bird['wingspan'] . '</td>';
                  echo '<td>' . $rowOf_bird['fly'] . '</td>';
                  echo '<td>' . $rowOf_bird['plumage_color'] . '</td>';
                  echo '<td>' . $rowOf_bird['display'] . '</td>';
                  echo '<td>' . $rowOf_bird['added_by'] . '</td>';
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