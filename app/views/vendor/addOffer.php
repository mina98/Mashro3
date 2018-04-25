<div class="container">

    <form class="wrapper form-horizontal " action="../../controllers/vendor/C_offer.php " method="post"  id="contact_form" id="myform">
<fieldset>

<!-- Form Name -->
<legend>Add Offer</legend>
<br/>

<!-- Select Basic -->
   

	<!-- id 	itemId 	unitPrice 	description 	vendorId -->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Product</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      
      <select name="itemNAME" class="form-control">
        <?php
        include '../../controllers/vendor/C_offer.php';
       for ($i = 0; $i < count($liste); $i++) {
       echo '<option>'.$liste[$i]['name'].'</option>';}
        ?>
       </select>
    </div>
  </div>
</div>
<!--
<div class="form-group"> 
  <label class="col-md-4 control-label" name="itemId">item Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="itemtype
" class="form-control selectpicker" >
        <option >please select item type</option>
      <option >4arab </option>
      <option>2aras </option>
      <option >72on</option>
    </select>
  </div>
</div>
</div>
-->
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">unit price</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon-oi glyphicon-credit-card"></i></span>
        <input name="unitPrice"  placeholder="unit price" class="form-control"  required=""  type="number" min="1">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon-oi glyphicon-comment"></i></span>
        <textarea type="text" name="description" class="form form-control"required="" placeholder="item description here please"></textarea>
        
    </div>
  </div>
</div>
  
 



<br/>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
 
    <input type="submit" name="SUBMIT" <?php include '../../controllers/vendor/C_offer.php';  ?>value ="add" class="btn btn-warning"  >
   
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    