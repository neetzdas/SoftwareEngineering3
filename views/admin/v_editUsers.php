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
            <?php $rowOfUser = $users_tb->find('user_id', $_GET['edit_Id'])->fetch(); ?>
        <!--form start-->
          <form action="editUsers" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo $rowOfUser['user_id']; ?>" />
                    <label>First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" required = "" value="<?php echo $rowOfUser['firstName']; ?>" >
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" required = "" value="<?php echo $rowOfUser['lastName']; ?>" >
                </div>

                <label>Role</label>
                    <select class="form-control" name="role_id">
                <?php
                    $stmtOfRole = $role_tb->findAll(); //quering from category table for its details
                    foreach ($stmtOfRole as $rowVal) {
                        echo '<option value="'.$rowVal['id'].'"';
                    if ($rowOfUser['role_id'] == $rowVal['id']) 
                        {echo 'selected';}
                        echo'>';
                        echo $rowVal['title'];
                        echo '</option>';
                }
                ?>
            </select>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" id="username" name="username" class="form-control" required = "" value="<?php echo $rowOfUser['username']; ?>" >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" required = "" value="<?php echo $rowOfUser['email']; ?>"> 
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" id="contactNum" name="contactNum" class="form-control" required = "" value="<?php echo $rowOfUser['contactNum']; ?>" >
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