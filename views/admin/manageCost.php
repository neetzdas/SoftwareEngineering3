<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Costs</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Costs</a></li>
          <li class="breadcrumb-item active">List of Costs</li>
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
            <h4 class="box-title">Manage Cost</h4>
          </div>
        <!--form start-->
          <form action="manageCost" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" name="cost_id" value="<?php if(isset($rowOfCost['cost_id']))echo $rowOfCost['cost_id']; ?>" /> <!-- getting the id and it is hidden -->

                <div class="form-group">
                    <label>Age Group</label>
                    <input type="text" name="age_grp" class="form-control" value="<?php if(isset($rowOfCost['age_grp']))echo $rowOfCost['age_grp']; ?>" />
                </div>
                <label for="name">Cost</label>
                <input type="text" name="cost" id="cost" class="form-control" value="<?php if(isset($rowOfCost['cost'])) echo $rowOfCost['cost']; ?>">
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
            <h4 class="box-title" >List of Costs</h4>
          </div>
          <div class="box-body">
            <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
              <thead>
                <tr>
                  <th style="text-align: center;">Id</th>
                  <th style="text-align: center;">Age Group</th>
                  <th style="text-align: center;">Cost</th>
                  <th style="text-align: center;">Edit</th>
                  <th style="text-align: center;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $cost_sn = 1;
              // using for each loop for diplaying details f the cost
                foreach ($costs_list as $rowOf_cost) {
                  echo '<tr class="col text-center">';
                  echo '<td>' . $cost_sn++ . '</td>';
                  echo '<td>' . $rowOf_cost['age_grp'] . '</td>';
                  echo '<td>' . $rowOf_cost['cost'] . '</td>';
                  //actions taken
                  echo '<td><a href="manageCost&edit_Id=' . $rowOf_cost['cost_id'].'" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a></td>';?> <!-- edit link of the cost-->
                    <td><a href="#" onclick="javascript: if(confirm('Are you sure?')){
                        document.location='manageCost&del_Id=<?php echo $rowOf_cost['cost_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a> <!-- link for  deleting the Cost-->
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