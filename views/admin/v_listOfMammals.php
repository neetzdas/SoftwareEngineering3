<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Mammals</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Mammals</a></li>
          <li class="breadcrumb-item active">List of Mammals</li>
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
            <h4 class="card-title" >List of Mammals</h4>
             <div class="card-tools">
            <a href="addMammals" class="btn btn-success">Add New</a>
          </div>
      </div>
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
                    <th style="text-align: center;">Gestation Period</th>
                    <th style="text-align: center;">Avg. Body temp.</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Added by</th>
                  	<th style="text-align: center;">Edit</th>
                  	<th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $mammal_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($mammals_list as $rowOf_mammal) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $mammal_sn++ . '</td>';
                  echo '<td>' . $rowOf_mammal['name'] . '</td>';
                  echo '<td>' . $rowOf_mammal['given_name'] . '</td>';
                  echo '<td>' . $rowOf_mammal['dob'] . '</td>';
                  echo '<td>' . $rowOf_mammal['gender'] . '</td>';
                  echo '<td>' . $rowOf_mammal['life_span'] . '</td>';
                  echo '<td>' . $rowOf_mammal['diet'] . '</td>';
                  echo '<td>' . $rowOf_mammal['global_population'] . '</td>';
                  echo '<td>' . $rowOf_mammal['date_joined'] . '</td>';
                  echo '<td>' . $rowOf_mammal['height'] . '</td>';
                  echo '<td>' . $rowOf_mammal['weight'] . '</td>';
                  echo '<td><img src="../../images/mammals/'.$rowOf_mammal['image'].'" style="width:50px;"></td>';
                  echo '<td>' . $rowOf_mammal['gestation'] . '</td>';
                  echo '<td>' . $rowOf_mammal['temperature'] . '</td>';
                  echo '<td>' . $rowOf_mammal['status'] . '</td>';
                  echo '<td>' . $rowOf_mammal['added_by'] . '</td>';

                  //actions taken
                  echo '<td><a href="editMammals&edit_Id=' . $rowOf_mammal['id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> 
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='editMammals&del_Id=<?php echo $rowOf_mammal['id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
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