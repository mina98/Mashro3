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
            <a class="logo"><b>Employee Home</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    ';
                     include_once '../../controllers/notfiyyyyyyyy.php';
                    
                     echo '
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">'.$len.'</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>';
                            
                    for($i=0;$i<count($datanot);$i++){        echo'  <li>
                                <a>
                                    <span class="subject">
                                    <span class="from">Admin</span>
                                 ';
    
    
   
     echo"
        
                                    <span class='message' style='overflow:auto ; display:block ' >
                                        {$datanot[$i]['message']}
                                    </span><br />
    
                                </a>
                            </li>";
         }
                         echo ' 
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
                          <span>Medicine</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=addmedicine">Add Medicine</a></li>
                          <li><a  href="?page=listmedicine">List Medicine</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Invoices</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=addInvoice">Add Invoice</a></li>
                          <li><a  href="?page=listInvoice">List Invoice</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Report</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?page=report">Report</a></li>
                          
                      </ul>
                  </li>
                  

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
          	
              <section  id=\'page\'>
                  
                    ';
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    }
                    elseif (@$_GET['Medicinpage']) {
                        $url = "../../controllers/employee/C_".$_GET['Medicinpage'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    }else {
                        echo 'lsa mfe4 7aga';
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

else {
   

    header("location:../loginview.php");
    //die();
}   



?>