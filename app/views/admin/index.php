<?php 

session_start();
//print_r($_SESSION);
if (@$_SESSION['username'] != null ){
  
    echo '



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../test-samer/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../test-samer/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../../test-samer/assets/css/style.css" rel="stylesheet">
    <link href="../../../test-samer/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a class="logo"><b>Admin Home</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                   
                    <!-- settings end -->
                    
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="?page=editProfile">My Profile</a></li>
                    <li><a class="logout" href="../../controllers/logoutController.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	   <p class="centered"><img ';     echo "src='{$_SESSION['image']}' "; echo ' class="img-rounded" width="100"></p>
              	  <h5 class="centered"> '; $_SESSION['username'];  echo '</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Accounts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=addAccount">Add User</a></li>
                          <li><a  href="?page=listAccount">List Useer</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Suplpy</span>
                      </a>
                      <ul class="sub">
                   <!--     <form action="../../controllers/admin/supplyController.php" method ="POST"/>-->
                                                                                         <li><!-- <input type="submit" name="submit" value ="make order" style="border-style: dotted;" >--><a   href="?page=addOrder" -->make order</a></li>
                          <li><!--<input type="submit" name="submit" value ="List order" >--> <a  href="?page=listOrder">List orders</a></li>
           <!--             </form>-->
                         
                      </ul>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=report">report</a></li>
                        
                         
                      </ul>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Notification</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=notifyy">Notify</a></li>
                        
                         
                      </ul>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	
              <section id=\'page\'>
              ';
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    } else {
                        
                        include "../../controllers/admin/reportController.php";
                        echo "
          
                        <h1 Style='text-align:center';>Report page</h1>
                        <div Style='text-align:center';>
                        <table border='3' class='table' Style='text-align:center'>
                        <tr>
                        <th>Offer</th>
                        <th>Vendor</th>
                        <th>Lowset</th>
                        </tr>
                        ";
                         for ($i = 0; $i < count($data); $i++)
                     
                         echo"
                        <tr>
                        <td>{$data[$i]['itemId']}</td>
                        <td>{$data[$i]['vendor']}</td>   
                        <td>{$data[$i]['low']}</td>
                        </tr>";
                        echo"
                        </table>
                        
                 
                        </div>
                      
    " ;
                   
                        echo "
                        <br>
                        <div Style='text-align:center';>
                        <table border='3' class='table' Style='text-align:center'>
                        <tr>
                        <th>Items</th>
                        <th>ExistNumber</th>
                        <th>SoldNumber</th>
                        </tr>
                        ";
                         for ($i = 0; $i < count($data2); $i++){
                          echo"
                        <tr>
                        <td>{$data2[$i]['name']}</td>
                        <td>{$data2[$i]['existMount']}</td>   
                                   <td>{$data2[$i]['soldMount']}</td>
                         </tr>";}
                        echo"
                        </table>
                        </div>
                         " ;
                    echo'
                            <form style="text-align:center" action="GenertePdf.php" method="post">
                       <input name ="submit" type="submit" value="Generte PDF"></form>';
                        }
                    
                        
                  echo '
              </section>
              
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

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
    
  <script>
      //custom select box

      $(function(){
          $(\'select.styled\').customSelect();
      });

  </script>

  </body>
</html>

                        ';
}
else{
       header("location:../loginview.php");
    //die();
}  
