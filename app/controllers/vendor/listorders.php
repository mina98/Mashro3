<?php

/* 

*list orders

*/
include "../../models/list.php";
 $tablename = "order_supply";
 $listreqe = new Display($tablename);
 $listreq = $listreqe->getAllData();
?>