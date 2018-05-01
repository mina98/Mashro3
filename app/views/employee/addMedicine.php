<div class="container">

    <form class="wrapper form-horizontal " action="../../controllers/employee/C_addMedicine.php" method="post"  id="contact_form" id="myform">
<fieldset>

<!-- Form Name -->
<legend>Add medicine</legend>
<br/>


<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="item_name" placeholder="Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>


  <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Price</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
        <input name="unitPrice" placeholder="price" class="form-control"  type="number" min="1" required>
    </div>
  </div>
</div>
  
  <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
  <input name="desription" placeholder="Description" class="form-control"  type="text" required>
    </div>
  </div>
</div>

  

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">intial mount</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
        <input name="existMount" value="" placeholder="intial mount" class="form-control"  type="number" min="1" required>
    </div>
  </div>
</div>


<br/>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
      <input type="submit" class="btn btn-warning" value="send" name="submit"> <span class="glyphicon glyphicon-send"></span>
     
  </div>
</div>
 
</fieldset>
</form>
</div>
    </div><!-- /.container -->
    