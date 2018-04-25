   
<!-- Bootstrap core CSS -->
    <link href='../../../test-samer/assets/css/bootstrap.css' rel='stylesheet'>
    <!--external css-->
    <link href='../../../test-samer/assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
    <style>
        .input-group{
            width: 65%;
            margin: auto;
           
        }
        
    </style>
    <!-- Custom styles for this template -->
    <link href='../../../test-samer/assets/css/style.css' rel='stylesheet'>
    <link href='../../../test-samer/assets/css/style-responsive.css' rel='stylesheet'>
	<link rel='stylesheet' href='../../../test-samer/css/style.css'>
        
<?php
include '../../controllers/admin/notifyy.php';
echo"
<div class='container'>

    

<!-- Form Name -->
<legend Style='text-align:center;'>make notfication</legend>
<br/>

<!-- Select Basic -->
 <form method='post' action='../../controllers/admin/notifyy.php' onsubmit='return post();'>
<div class='form-group'> 
   
    
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
    <select name='userType' class='form-control selectpicker' >
 <option >Employee</option>
      
      <option >Vendor</option>
    </select>
  
</div>
</div>
<br/>
<br/>

        <div class='form-group'>
                <label class='col-md-4 control-label'></label>  
                <div class='col-md-4 inputGroupContainer'>
                    <div class='input-group'  style='width:100%'>
                        <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                        <textarea name='message' rows='10' cols='70' placeholder='your message' class='form-control'  type='text' required></textarea>
                    </div>
                </div>
            </div>

            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class='form-group'>
                <label class='col-md-4 control-label'></label>
                <div class='col-md-4'>
                    <button type='submit' name='SUBMIT' class='btn btn-warning' value='notify' style='madgin:auto'>Comment <span class='glyphicon glyphicon-send'></span></button>
                </div>
            </div>
        </form><br>
        <script>
        function func(){
            
            ned= documents.getElmentById('mina').value;
        }
        
        </script>
        
    ";?>