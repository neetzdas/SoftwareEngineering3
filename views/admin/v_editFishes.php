<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Fishes</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Fishes</a></li>
          <li class="breadcrumb-item active">List of Fishes</li>
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
            <h4 class="box-title">Manage Fishes</h4>
          </div>
        <!--form start-->
        <?php $fishes_tb = $fishes_tb->find('id', $_GET['edit_Id'])->fetch(); ?>
          <form action="editFishes" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $fishes_tb['id']; ?>" />
                    <label>Name</label>
                    <input type="text" id="name" name="name" class="form-control" required = "" value="<?php echo $fishes_tb['name']; ?>">
                </div>

                <div class="form-group">
                    <label>Given Name</label>
                    <input type="text" id="given_name" name="given_name" class="form-control" required = "" value="<?php echo $fishes_tb['given_name']; ?>">
                </div>

                <label>Category</label>
                    <select class="form-control" name="category_id">
                <?php
                    $stmtOfCategory = $cat_tb->findAll(); //quering from category table for its details
                    foreach ($stmtOfCategory as $rowVal) {
                        echo '<option value="'.$rowVal['cat_id'].'"'; //for the categories in the ctaegory table
                    if ($fishes_tb['category_id']==$rowVal['cat_id']) 
                        {echo 'selected';}
                        echo'>';
                        echo $rowVal['cat_name'];
                        echo '</option>';
                }
                ?>
            </select>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" required = "" value="<?php echo $fishes_tb['dob']; ?>">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                        <option value="Male" <?php if ($fishes_tb['gender']=="Male") 
                        {echo 'selected';}
                    ?> >Male</option>
                        <option value="Female" <?php if ($fishes_tb['gender']=="Female") 
                        {echo 'selected';}
                    ?> >Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" class="form-control" required = "" value="<?php echo $fishes_tb['life_span']; ?>">
                </div>

                <div class="form-group">
                    <label>Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" class="form-control" required = "" value="<?php echo $fishes_tb['diet']; ?>">
                </div>

                <div class="form-group">
                    <label>Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="6" class="form-control"><?php echo $fishes_tb['habitat']; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" class="form-control" required = "" value="<?php echo $fishes_tb['date_joined']; ?>">
                </div>

                <div class="form-group">
                    <label>Global Population</label>
                    <input type="number" id="global_population" name="global_population" class="form-control" required = "" value="<?php echo $fishes_tb['global_population']; ?>">
                </div>

                <div class="form-group">
                    <label>Height</label>
                    <input type="string" id="height" name="height" class="form-control" required = "" value="<?php echo $fishes_tb['height']; ?>">
                </div>

                <div class="form-group">
                    <label>Weight</label>
                    <input type="string" id="weight" name="weight" class="form-control" value="<?php echo $fishes_tb['weight']; ?>">
                </div>

                <div class="form-group">
                    <label>Temperature</label>
                    <input type="number" id="temperature" name="temperature" class="form-control" value="<?php echo $fishes_tb['temperature']; ?>">
                </div>

                <div class="form-group">
                    <label>Water Type</label>
                    <select class="form-control" name="water_type">
                        <option value="Fresh" <?php if ($fishes_tb['water_type']=="Fresh") 
                        {echo 'selected';}
                    ?> >Fresh</option>
                        <option value="Cold" <?php if ($fishes_tb['water_type']=="Cold") 
                        {echo 'selected';}
                    ?> >Cold</option>
                    <option value="Salty" <?php if ($fishes_tb['water_type']=="Salty") 
                        {echo 'selected';}
                    ?> >Salty</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <input type="text" id="color" name="color" class="form-control" value="<?php echo $fishes_tb['color']; ?>">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    
                <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="image" id="image" type="file"> 
                                    </td>
                                    <td>
                                        <?php if(!empty($fishes_tb['image']))
                                                 echo '<td><img src="../../images/fishes/'.$fishes_tb['image'].'" style="width:100px; height:100px;"></td>';
                                                ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Do you want to display in home page?</label>
                    <div class="controls">
                        <input type="checkbox" name="display" id="display" value="1" <?php if($fishes_tb['display'] == "1") {echo 'checked';} ?> >
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