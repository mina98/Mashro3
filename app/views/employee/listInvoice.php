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
 
          
          	
			
  <div id="f-accordion">
    <h3><i class="fa fa-tasks"></i> List Invoices</h3>
  <div>
  
    <p>
    show all Invoices we have
    </p>
	
	<aside class="alert success">
  <p><i class="icon fa fa-envelope-o"></i> Roger Roger, Message Received. <i class="close fa fa-times"></i></p>
</aside><!-- end alert -->
<form> 
  <input type="search" name="search" class="light-table-filter" data-table="order-table" placeholder="SEARCH BY itemid"/> 

  <section class="table-box">
    <table class="order-table">
      <thead>
        <tr>
          <th>NAME</th>
          <th>ID</th>
          <th>ITEMID</th>
          <th>Mount</th>
          <th>UNITPRICE</th>
          <th>TOTALPRICE</th>
          <th>INVOICEDATE</th>                             
        </tr>
      </thead>
      <tbody>
        <?php
        include "../../controllers/employee/C_invoice.php";
    for ($i = 0; $i < count($BannerDataDisplay); $i++) {
         $BannerDataDispla= $displaybanner->getRecordByID($BannerDataDisplay[$i]["itemId"],"items","name","id");
         echo "            
                <tr>
                    <td>{$BannerDataDispla}</td>
                    <td>{$BannerDataDisplay[$i]['id']}</td>
                    <td>{$BannerDataDisplay[$i]['itemId']}</td>
                    <td>{$BannerDataDisplay[$i]['Mount']}</td>
                    <td>{$BannerDataDisplay[$i]['unitPrice']}</td>
                    <td>{$BannerDataDisplay[$i]['totalPrice']}</td>
                    <td>{$BannerDataDisplay[$i]['invoiceDate']}</td>
                </tr>
            ";
        }
    ?>
      </tbody>
    </table>
</form>
	</section>
	
  </div>

</div>
	
	<!-- jQuery via Google's CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  

    <script  src="../../../test-samer/js/index.js"></script>



  </section>



    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
