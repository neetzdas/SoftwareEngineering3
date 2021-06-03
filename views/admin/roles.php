<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Roles</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Roles</a></li>
          <li class="breadcrumb-item active">List of Roles</li>
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
            <h4 class="box-title">Manage Roles</h4>
          </div>
        <!--form start-->
          <form action="manageRoles" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="id" value="<?php if(isset($rowOfRole['id']))echo $rowOfRole['id'];?>" /> <!-- getting the id and it is hidden -->
                <label>Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php if(isset($rowOfRole['title']))echo $rowOfRole['title']; ?>">
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" name="submitBtn" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row" style="padding-top: 30px;">
      <div class="col-lg-12">
        <div class="box">
          <div class="box-header">
            <h4 class="box-title" >List of Roles</h4>
          </div>
          <div class="box-body">
            <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
              <thead>
                <tr>
                  <th style="text-align: center;">Id</th>
                  <th style="text-align: center;">Title</th>
                  <th style="text-align: center;">Edit</th>
                  <th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $role_sn = 1;
              // using for each loop for diplaying details f the role
                foreach ($roles_list as $rowOf_role) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $role_sn++ . '</td>';
                  echo '<td>' . $rowOf_role['title'] . '</td>';
                  //actions taken
                  echo '<td><a href="manageRoles&edit_Id=' . $rowOf_role['id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> <!-- edit link of the role-->
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='manageRoles&del_Id=<?php echo $rowOf_role['id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a> <!-- link for  deleting the role-->
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
    