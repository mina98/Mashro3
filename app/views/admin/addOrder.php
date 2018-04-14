   <!-- Bootstrap core CSS -->
    <link href="../../../test-samer/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../test-samer/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../../test-samer/assets/css/style.css" rel="stylesheet">
    <link href="../../../test-samer/assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../test-samer/css/style.css">
        
        
<div class="container">

    

<!-- Form Name -->
<legend>make order</legend>
<br/>

<!-- Select Basic -->
   
<div class="form-group"> 
    <h3 class="h3">Item Needed</h3>
    
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="userType" class="form-control selectpicker" >
        <option >please select medicine to cheack offers</option>
      <option >medicine1</option>
      <option>medicine2</option>
      <option >medicine3</option>
    </select>
  
</div>
</div>
<br/>
<br/>
<h3 class="h3">Avalible offers</h3>

<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>

	<section class="table-box">
		<table class="tabel table-box">
			<thead>
				<tr>
					<th>id</th>
					<th>item</th>
					<th>vendor</th>
                                        <th>Unit Price</th>
                                        <td>order Amount</td>
                                        <td>Confirm</td>
				</tr>
			</thead>
			<tbody>
                            
                       

			<?php
                        include_once"../../controllers/admin/makeController.php";
                        for ($i = 0; $i < count($data); $i++)
                       echo "
                           <tr>
                      		<form action = '../../controllers/admin/makeController.php' method ='post'>			
                                 
                                        <td>{$data[$i]['id']}</td>
					<td>{$data[$i]['itemId']}</td>
					<td>{$data[$i]['unitPrice']}</td>
					<td>{$data[$i]['description']}</td>
                                        <td>{$data[$i]['vendorId']}</td>
                                             <input type=text  style='display:none; ' name='Andrew' value= $i>
                                                 <td><input type ='submit' name ='submit' value='order'></td>
                                        </form>
				</tr>
			"
                        	
                        
                        ?>
                                </tbody>
		</table>
	</section>
	
  </div>

        <script>
        function func(){
            
            ned= documents.getElmentById('mina').value;
        }
        
        </script>
        
    <script  src="../../../test-samer/js/index.js"></script>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../../test-samer/assets/js/jquery.js"></script>
    <script src="../../../test-samer/assets/js/bootstrap.min.js"></script>
    <script src="../../../test-samer/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../../../test-samer/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../../../test-samer/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../../test-samer/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../../../test-samer/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../../../test-samer/assets/js/common-scripts.js"></script>

    <!--script for this page-->