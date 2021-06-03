<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Users</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Users</a></li>
          <li class="breadcrumb-item active">List of Users</li>
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
            <h4 class="card-title" >List of Users</h4>
             <div class="card-tools">
            <a href="addUsers" class="btn btn-success">Add New</a>
          </div>
      </div>
          <div class="card-body table-responsive p-0">
                <table id ="dataList" class="table table-hover text-nowrap">
              <thead>
                <tr>
                	<th style="text-align: center;">Id</th>
                    <th style="text-align: center;">First Name</th>
                    <th style="text-align: center;">Last Name</th>
                    <th style="text-align: center;">Username</th>
                    <th style="text-align: center;">Role</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Contact Number</th>
                  	<th style="text-align: center;">Edit</th>
                  	<th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $user_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($users_list as $rowOf_user) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $user_sn++ . '</td>';
                  echo '<td>' . $rowOf_user['firstName'] . '</td>';
                  echo '<td>' . $rowOf_user['lastName'] . '</td>';
                  echo '<td>' . $rowOf_user['username'] . '</td>';
                  foreach ($roles as $role)
                    if ($role['id'] == $rowOf_user['role_id']){
                      echo '<td>'.$role['title'].'</td>';
                    }
                  echo '<td>' . $rowOf_user['email'] . '</td>';
                  echo '<td>' . $rowOf_user['contactNum'] . '</td>';
                  
                  
                  //actions taken
                  echo '<td><a href="editUsers&edit_Id=' . $rowOf_user['user_id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> 
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='addUsers&del_Id=<?php echo $rowOf_user['user_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
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