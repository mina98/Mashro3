<?php

/* 

*list orders

*/
include_once "../../models/list.php";
 $tablename = "order_supply";
 $listreqe = new Display($tablename);
 $listreq = $listreqe->getAllData();
?>