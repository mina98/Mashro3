<div class="container">

    <form class="wrapper form-horizontal " action="../../controllers/employee/C_addMedicine.php" method="post"  id="contact_form" id="myform">
<fieldset>

<!-- Form Name -->
<legend>Add medicine</legend>
<br/>

<!-- Select Basic -->
<!--medicineType id item_name unitPrice desription existMount-->   
<!-- id name unitPrice existMount soldMount desription-->
<div class="form-group"> 
  <label class="col-md-4 control-label">item Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="medicineType" class="form-control selectpicker" required>
      <option >4arab</option>
      <option>a2ras</option>
      <option >72on</option>
    </select>
  </div>
</div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="id" placeholder="ID" class="form-control"  type="text" required>
    </div>
  </div>
</div>
<!-- Text input-->

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
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="unitPrice" placeholder="price" class="form-control"  type="text" required>
    </div>
  </div>
</div>
  
  <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="desription" placeholder="Description" class="form-control"  type="text" required>
    </div>
  </div>
</div>

  

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">intial mount</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="existMount" value="" placeholder="intial mount" class="form-control" type="text" required>
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
    