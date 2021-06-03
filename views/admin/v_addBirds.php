<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Birds</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Birds</a></li>
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
        <div class="box box-primary">
          <div class="box-header">
            <h4 class="box-title">Manage Birds</h4>
          </div>
        <!--form start-->
          <form action="addBirds" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="name" name="name" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Given Name</label>
                    <input type="text" id="given_name" name="given_name" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
				<?php
					$stmtForCategory = $cat_tb->findAll();
					foreach ($stmtForCategory as $rowVal) {
						echo '<option value="' . $rowVal['cat_id'] . '">' . $rowVal['cat_name'] . '</option>';
					}
				?>
			</select>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="6" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Global Population</label>
                    <input type="number" id="global_population" name="global_population" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Height</label>
                    <input type="string" id="height" name="height" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Weight</label>
                    <input type="string" id="weight" name="weight" class="form-control">
                </div>

                <div class="form-group">
                    <label>Method For Nest Constrution</label>
                    <textarea name="nest" id="nest" cols="30" rows="6" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Clutch Size</label>
                    <input type="string" id="clutch" name="clutch" class="form-control">
                </div>

                <div class="form-group">
                    <label>WingSpan</label>
                    <input type="text" id="wingspan" name="wingspan" class="form-control">
                </div>

                <div class="form-group">
                    <label>Plummage Color</label>
                    <input type="text" id="plumage_color" name="plumage_color" class="form-control">
                </div>

                <div class="form-group">
                    <label>Ability to fly</label>
                    <select class="form-control" name="fly">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label>Do you want to display in home page?</label>
                    <div class="controls">
                        <input type="checkbox" name="display" id="display" value="1">
                        <h5>Yes</h5>
                    </div>
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