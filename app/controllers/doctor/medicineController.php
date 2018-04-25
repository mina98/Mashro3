<?php

    // display exist invices  
    include_once  '../../models/list.php';
    $tablename = "items";
    $displaybanner = new Display($tablename);
    $BannerDataDisplay = $displaybanner->getAllData();

?>
