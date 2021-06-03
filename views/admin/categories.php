<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Categories</a></li>
          <li class="breadcrumb-item active">List of Categories</li>
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
            <h4 class="box-title">Manage Category</h4>
          </div>
        <!--form start-->
          <form action="manageCategories" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="cat_id" value="<?php if(isset($rowOfCategory['cat_id']))echo $rowOfCategory['cat_id']; ?>" /> <!-- getting the id and it is hidden -->
                <label for="name">Category</label>
                <input type="text" name="cat_name" id="cat_name" class="form-control" value="<?php if(isset($rowOfCategory['cat_name'])) echo $rowOfCategory['cat_name']; ?>">
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
            <h4 class="box-title" >List of Categories</h4>
          </div>
          <div class="box-body">
            <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
              <thead>
                <tr>
                  <th style="text-align: center;">Id</th>
                  <th style="text-align: center;">Name</th>
                  <th style="text-align: center;">Edit</th>
                  <th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $category_sn = 1;
              // using for each loop for diplaying details f the category
                foreach ($categories_list as $rowOf_category) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $category_sn++ . '</td>';
                  echo '<td>' . $rowOf_category['cat_name'] . '</td>';
                  //actions taken
                  echo '<td><a href="manageCategories&edit_Id=' . $rowOf_category['cat_id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> <!-- edit link of the category-->
      
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='manageCategories&del_Id=<?php echo $rowOf_category['cat_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a> <!-- link for  deleting the category-->
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