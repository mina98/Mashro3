<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  

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
 
          
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Place your content here.</p>
          		</div>
          	</div>
			
  <div id="f-accordion">
    <h3><i class="fa fa-tasks"></i> List Medicine</h3>
  <div>
  
    <p>
    show all medicine we have
    </p>
	
	<aside class="alert success">
  <p><i class="icon fa fa-envelope-o"></i> Roger Roger, Message Received. <i class="close fa fa-times"></i></p>
</aside><!-- end alert -->

<!---
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
---->
<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>
	<section class="table-box">
		<table class="order-table">
			<thead>
				<tr>
					<th>id</th>
					<th>medicin</th>
					<th>exist amount</th>
                                        <th>sold amount</th>
					<th>unit Price</th>
                                        <th>discription</th>
					<th>Update</th>
				</tr>
			</thead>
			<tbody>
                            
				<?php
                                 include_once "../../controllers/employee/C_listmedicine.php";
                                for($i=0;$i< count($allData);$i++){
                                    echo '<tr action=" " method="post">';
                                    echo "<td>". $allData[$i]['id'] ."</td>";
                                    echo "<td>".$allData[$i]['name'] ."</td>";
                                    echo "<td>".$allData[$i]['unitPrice'] ."</td>";
                                    echo "<td>".$allData[$i]['existMount'] ."</td>";
                                    echo "<td>".$allData[$i]['soldMount'] ."</td>";
                                    echo "<td>".$allData[$i]['desription'] ."</td>";
                                    echo "<td><a href='?Medicinpage=update&action=update&id={$allData[$i]['id']}'><button class='update'>Update</button></td>";
                                    echo '</tr>';
                                }
                                ?>
                        
				
                        </tbody> 
		</table>
	</section>
	
  </div>

</div>
	




  </section>

    <!-- js placed at the end of the document so the pages load faster -->
  
    <!--common script for all pages-->

    <!--script for this page-->
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
