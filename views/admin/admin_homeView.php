<?php 
  if(isset($_POST['login_btn'])){
    $stmtForAdminLogin = $loggingIn->find('username',$_POST['username']);
    $rowOfAdmin = $stmtForAdminLogin->fetch(); 
      if(password_verify($_POST['password'],$rowOfAdmin['password'])){ 
      $_SESSION['sessionBackUserId'] = $rowOfAdmin['role_id'];  
      $_SESSION ['username']=$_POST['username']; 
      $_SESSION['loggedin'] = true; 
    }
    else{
      echo'<script>Sorry! You cannot log in. Please check if the username or password is wrong.</script>'; 
    }
  }
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="box">
          <div class="box-header">
            <h4 class="box-title" >List of Categories</h4>
          </div>
          <div class="box-body">
            <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
              <thead>
                <tr >
                  <th style="text-align: center;">Id</th>
                  <th style="text-align: center;">Name</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $category_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($allCategories_list as $rowOf_category) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $category_sn++ . '</td>';
                  echo '<td>' . $rowOf_category['cat_name'] . '</td>';
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
      <?php
}
?>