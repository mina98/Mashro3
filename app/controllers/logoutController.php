<?php


if( session_start() && isset($_SESSION['username']))
{
     echo $_SESSION['username'];
    session_destroy();
    
    
    echo 'aaa';
      header("Location:../views/loginview.php"); 
   die();
}


