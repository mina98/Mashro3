<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  
    <style>
        .con{
            width: 30%;
	background-color: #E6FFFF;
	height: 30px;
	margin-right: 10px;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="../../../test-samer/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../test-samer/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../../test-samer/assets/css/style.css" rel="stylesheet">
    <link href="../../../test-samer/assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../test-samer/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
     <!-- MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 
          
          	
			
  <div id="f-accordion">
    <h3><i class="fa fa-tasks"></i> List Orders</h3>
  <div>
	
	<aside class="alert success">
  <p><i class="icon fa fa-envelope-o"></i> Roger Roger, Message Received. <i class="close fa fa-times"></i></p>
</aside><!-- end alert -->

<!---
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
---->
<input type="search" class="light-table-filter" data-table="order-table" placeholder="FILTER " />
	<section class="table-box">
		<table class="order-table">
			<thead>
				<tr>
					<th>id</th>
					<th>item</th>
					<th>amount</th>
                                        <th>price</th>
                                        <th>vendor</th>
					<th>Confirm order Arrived</th>
                                        
                                       
				</tr>
			</thead>
                        <tbody>
			<?php
                        //`id`, `itemId`, `mount`, `Price`, `vendorId`, `offerId`
                    include "../../controllers/admin/ListControllers.php";
                    $j=1;    
                    for ($i = 0; $i < count($data); $i++)
                    {echo "
                           <tr>
                      		<form action = '../../controllers/admin/ListControllers.php' method ='post'>			
            
                                        <td>$j</td>
					<td>{$dataan[$i]}</td>
					
					<td>{$data[$i]['mount']}</td>
                                        <td>{$data[$i]['Price']}</td>
                                        <td>{$dataa[$i]}</td>
                                        <td><input type='submit' class='con' name ='submit' value='confirm'>
                                        <input type='submit' class='con' name  ='submit' value='unconfirm'></td>
                                        <input type=text  style='display:none; ' name='Andrew' value= {$data[$i]['id']}>
                                        <input type=text  style='display:none; ' name='Andrews' value= {$data[$i]['mount']}> 
                                        <input type=text  style='display:none; ' name='Andrewss' value= {$dataaan[$i]}>
                                        <input type=text  style='display:none; ' name='Andrewsss' value= {$dataaaan[$i]}>    
                                        </form>
				</tr>
			";
                   $j++; }	
                        
                        ?></tbody>
		</table>
	</section>
	
  </div>

</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  

    <script  src="../../../test-samer/js/index.js"></script>
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
