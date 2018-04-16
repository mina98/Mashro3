<?php
    
    include_once  '../../models/abastractConnect.php';
    include  '../../models/list.php';
    
    $li = new Display("items");

    $allData = $li->getAllData();
      
    $li->close();
    
    include '../../views/employee/listMedicine.php';

    