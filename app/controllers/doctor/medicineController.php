<?php
  //include "../../includes/init.php";
  //include "../../includes/autoloader.php";
  //include "../models/list.php";
 
if ($_POST) {
    
} 
else {
    // display exist invices  
    include '../../models/list.php';
    $tablename = "items";
    $displaybanner = new Display($tablename);
    $BannerDataDisplay = $displaybanner->getAllData();
}
?>
