<?php

    // display exist invices  
    include '../../models/list.php';
    $tablename = "items";
    $displaybanner = new Display($tablename);
    $BannerDataDisplay = $displaybanner->getAllData();

?>
