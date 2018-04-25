
<?php 

echo '
<script type="text/javascript" src="../../../test-samer/jquery.js">
<script type="text/javascript">';
echo '
function post()
{
  var comment = document.getElementById("comment").value;
  
  
    $.ajax
    ({
      type: "post",
      url: "../../controllers/doctor/commentcontroller.php",
      data: 
      {
               user_comm:comment
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
           
  
      }
    });
  

  
}
</script>';

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
            <a  class="logo"><b>Patient Home</b></a>
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
                          <i class="fa fa-envelope-o"></i>
                          <span>Comments</span>
                      </a>
                  </li>	
                                   <li class="mt">
                      <a href="?addpage=addOrder">
                          <i class="fa fa-dashboard"></i>
                          <span>Order</span>
                      </a>
                  </li>
                   

                  <li class="mt">
                      <a href="?page=service">
                          <i class="fa fa-dashboard"></i>
                          <span>service</span>
                      </a>
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
          	
              <section id=\'page\'>
                  
                  ';
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    } elseif (@$_GET['addpage']) {
                        
                        $url = "../../controllers/patient/C_".$_GET['addpage'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo ' requested file is not found !';
                        }
                    }else {
                        echo '<form method="post" action="" onsubmit="return post();">
        <div class="form-group">
                <label class="col-md-4 control-label"></label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <textarea id="comment" rows="5" cols="80" placeholder="your comment" class="form-control"  type="text" required></textarea>
                    </div>
                </div>
            </div>

            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input type="submit" value="Post Comment" class="btn btn-warning">
   
                </div>
            </div>
        </form>
        
';
                        echo'<br>';
                        echo ' <form >';
 echo "                   <div class='form-group '>
                <label class='col-md-4 control-label'></label>  
                <div class='col-md-4 inputGroupContainer'>
                    <div class='input-group'>
                        <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>";
                            
                            include_once '../../controllers/patient/commentcontroller.php ' ;
                            for ($i = 0; @$find_comment[$i]['id'] != NULL; $i++) {
                              echo "<div name='comment'
class='form-control'  type='text' ;>";
                                
                                
                                @$comment_name = $find_comment [$i]['name'];
                                @$comment = $find_comment [$i]['comment'];
                                echo $comment_name . " : " . $comment . '<br>';
                                echo '</div>';
                            }
                           
echo'

                    </div>
                </div>
            </div>




        </form>';
}
                   echo '
              </section>
              
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
 
  </section>

    
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