<?php
include '../../controllers/editprofilecontroller.php';
 echo "<div class='container'>
<form class='wrapper form-horizontal ' action='../../controllers/editprofilecontroller.php' method='post'  id='contact_form' id='myform' enctype='multipart/form-data'>
<fieldset>
<style>
   input[type=file]{
        background-color:#fff;
        width:100%;
        color : #353535;
        height:30px;
        border-radios:10px;
        border :1px;
    } 
</style>
<!-- Form Name -->
<legend>Edit profile</legend>
<br/>

<!-- Select Basic -->
   
<div class='form-group'> 

<!-- Text input-->
<div class='form-group'>
  <label class='col-md-4 control-label'>ID</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-bookmark'></i></span>
        <input name='idd'  value='$SecDataDisplaya[id]' class='form-control' type='text' readonly>
    </div>
  </div>
</div>

 <!-- Text input-->
       <div class='form-group'>
  <label class='col-md-4 control-label'>Name</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
  <input name='name' value='$SecDataDisplaya[name]' class='form-control'  type='text'>
    </div>
  </div>
</div>

<!-- Text input-->

<div class='form-group'>
  <label class='col-md-4 control-label'>password</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon-oi glyphicon-lock'></i></span>
        <input name='password' type='text' value='$SecDataDisplaya[password]' class='form-control'  readonly>
    </div>
  </div>
</div>
  
 <!-- Text input-->

<div class='form-group'>
  <label class='col-md-4 control-label'>Enter New Password</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon-oi glyphicon-lock'></i></span>
        <input name='passwordagain1' type='password' placeholder='NewPassword' class='form-control'  >
    </div>
  </div>
</div>
  
<!-- Text input-->
       <div class='form-group'>
  <label class='col-md-4 control-label'>E-Mail</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
  <input name='email' value='$SecDataDisplaya[email]' class='form-control'  type='text'>
    </div>
  </div>
</div>


<!-- Text input-->
      
<div class='form-group'>
  <label class='col-md-4 control-label'>Address</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-road'></i></span>
  <input name='address' value='$SecDataDisplaya[adress]' class='form-control' type='text'>
    </div>
  </div>
</div>

<div class='form-group'>
  <label class='col-md-4 control-label'>Image</label>  
    <div class='col-md-4 inputGroupContainer'>
    <div class='input-group' class='secand_cl'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-upload'></i></span>
  <input type='file' name='image'>
    </div>
  </div>
</div>
<br/>
<!-- Button -->
<div class='form-group'>
  <label class='col-md-4 control-label'></label>
  <div class='col-md-4'>
      <button type='submit' name='submit' value='save' class='btn btn-warning' >Save <span class='glyphicon glyphicon-send'></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>";
 ?>
    


    