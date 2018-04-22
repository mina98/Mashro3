<?php
    
    include_once  '../../models/abastractConnect.php';
    include_once  '../../models/list.php';
    
    $li = new Display("items");

    $allData = $li->getAllData();
      
    $li->close();
    
    include_once '../../views/employee/listMedicine.php';

    