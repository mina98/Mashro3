 
<div class="container">

    <form class="wrapper form-horizontal " action="../../controllers/admin/accountsController.php" method="post"  id="contact_form" id="myform">
<fieldset>

<!-- Form Name -->
<legend>Add User</legend>
<br/>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">User Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="usertype" class="form-control selectpicker" >
        <option >please select user type</option>
        <option value="vendor" >vendor</option>
        <option value="employee">employee</option>
        <option value="doctor">doctor</option>
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
  <input  name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>

 <!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="username" placeholder="User Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon-oi glyphicon-lock"></i></span>
        <input name="password" type="password" placeholder="password" class="form-control"  type="text">
    </div>
  </div>
</div>
  
 
  

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
  <input name="adress" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>


<br/>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" name ="submit" value="add" class="btn btn-warning" > <span class="glyphicon glyphicon-send"></span></input>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    