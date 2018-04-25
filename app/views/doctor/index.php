<?php

@session_start();
//print_r($_SESSION);
if (@$_SESSION['username'] != null) {
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
            <a class="logo"><b>Dcotor Home</b></a>
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
                   <li class="mt">
                      <a href="?page=exist">
                          <i class="fa fa-dashboard"></i>
                          <span>Availble Medicne</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="Comment.php">
                          <i class="fa fa-envelope-o"></i>
                          <span>Comment</span>
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
          	
              <section  id=\'page\'>
                  
               ';
    if (@$_GET['page']) {
        $url = $_GET['page'] . ".php";
        if (is_file($url)) {
            include $url;
        } else {
            echo 'requested file is not found !';
        }
    } else {
        include_once "../../controllers/doctor/appoimentController.php";
        echo'                       <h1 Style="text-align:center";>Reserving page</h1>

                        <div Style="text-align:center";>        
                    <section class="table-box">
                        <table border="3" class="table" Style="text-align:center">
			<thead>
				<tr>
					
					<th>Day</th>
					<th>Time</th>
                                        <th>Num patient can served</th>
                                        <th>Num Patient served</th>
					
                                        
				</tr>
			</thead>
                         ';
        for ($i = 0; $i < count($data); $i++) {
            echo"
                        <tbody>
                                   <td>{$data[$i]['Day']}</td>
                                    <td>{$data[$i]['appoint']}</td>
                                <td>{$data[$i]['patientlimit']}</td>    
                                <td>{$data[$i]['patientnum']}</td>                                   
                                                                        
                                    </tr>
                             ";
            $check[$i]  =$data[$i]['Day'];
        }
        echo' <form action="../../controllers/doctor/appoimentController.php" method="post" >';
        echo '
                         <form action="../../controllers/doctor/appoimentController.php" method="post" >
    <tr>
                    <td>
                    <select name="Day" class="form-control selectpicker" >
                    ';
        
        $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Saturday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo'
        <option value="Saturday" >Saturday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Sunday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
       echo ' <option value="Sunday">Sunday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Monday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo'<option value="Monday">Monday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Tuesday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo '<option value="Tuesday">Tuesday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Wednesday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo '<option value="Wednesday">Wednesday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Thursday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo '<option value="Thursday">Thursday</option>';}
                $flg=0;
          for ($i = 0; $i < count($data); $i++) {
            
              if($check[$i]=='Friday'){
                  $flg=1;
                break 1;
          }
              else{$flg=0;
                  }
          }
        
        if($flg==0){
        echo '<option value="Friday">Friday</option>';}
        echo '
    </select></td>';

        echo'
                                    <td>                <select name="appoint" class="form-control selectpicker" >

        <option value="8:12" >8:12</option>
        <option value="12:16">12:16</option>
        <option value="16:20">16:20</option>
        <option value="20:24">20:24</option>
        <option value="24:4">24:4</option>
        <option value="4:8">4:8</option>
        
    </select></td>
                                    <td><input type="text" name="patientlimit" class="form-control selectpicker"required></td>                                   
                                     <td>
                                     <input type="submit" name="submit" class="form-control selectpicker" value="add"></td>                                       
                                                                                </tr>
                        </body>
</table>';
        echo '</form>';



        echo' <h2 Style="text-align:center";>Person Reserving</h1>

                       
                        <div Style="text-align:center";>        
                    <section class="table-box">
                        <table border="3" class="table" Style="text-align:center">
			<thead>
				<tr>
					
					
					<th>Day</th>
                                        <th>Patient Name</th>
                                        <th>appoinment</th>
					
                                        
				</tr>
			</thead>
                         ';
        for ($i = 0; $i < count($patient); $i++) {
            
            echo"
                        <tbody>
                                   <td>{$patient[$i]['Day']}</td>
                                    <td>{$patient[$i]['username']}</td>
                                    <td>{$patient[$i]['appoint']}</td>                                   
                                                                       
                                    </tr>
                            
                
";
        }
    }
    echo'                     </body>
</table>
              </section>         
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
    <!--  <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
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
  </body>
</html>
';
} else {


    header("location:../loginview.php");
    //die();
}
?>
