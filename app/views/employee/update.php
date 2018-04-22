<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
    .hide{
        display: none;
    }
</style>
<div class="container">

    <form class="wrapper form-horizontal " action="../../controllers/employee/C_update.php" method="post"  id="contact_form" id="myform">
<fieldset>

<!-- Form Name -->
<legend>Update medicine</legend>
<br/>
<input type="text" name="id" value="<?php echo "{$id}";?>" class="hide">
<!-- Select Basic -->
<!--medicineType id item_name unitPrice desription existMount-->   
<!-- id name unitPrice existMount soldMount desription-->

<!--     $arr=$li->getAllDataByID($update['id']);-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="item_name" placeholder="Name" value="<?php echo "{$arr[0]['name']}"; ?>" class="form-control"  type="text" required>
    </div>
  </div>
</div>


  <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Price</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="unitPrice" placeholder="price" class="form-control"  type="text"  value="<?php echo "{$arr[0]['unitPrice']}"; ?>" required>
    </div>
  </div>
</div>
  
  <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="desription" placeholder="Description" class="form-control"  type="text"  value="<?php echo "{$arr[0]['desription']}"; ?>" required>
    </div>
  </div>
</div>

  

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">intial mount</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="existMount"  value= "<?php echo "{$arr[0]['existMount']}"; ?>" placeholder= "intial mount" class="form-control" type="text" required>
    </div>
  </div>
</div>


<br/>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
      <button type="submit" class="btn btn-warning" value="update" name="update">Update <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
<!------>
