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
        <div class="box box-primary">
          <div class="box-header">
            <h4 class="box-title">Manage Users</h4>
          </div>
        <!--form start-->
          <form action="addUsers" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    
                    <label>First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" required = "" >
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" required = "">
                </div>

                 <div class="form-group">
                <label>Role</label>
                    <select class="form-control" name="role_id">
                <?php
                    $stmtOfRole = $role_tb->findAll();
                    foreach($stmtOfRole as $row)
        echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
         ?>
        </select>
      </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" id="username" name="username" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" required = "" >
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" id="contactNum" name="contactNum" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control" required = "" >
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