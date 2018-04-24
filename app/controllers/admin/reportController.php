<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../models/Supply_Models.php";
include '../../models/list.php';
                $tablename="offers";
        	$displaypage=new Supply_Models($tablename);  
                $data =$displaypage->getAllDataBy(2);
                $data2=$displaypage->getAllDataBy(3);
                $displaypagee=new Supply_Models('items');
                $dataa =$displaypagee->getAllData();
                $displaypage->close();
                $displaypagee->close();
                $displaypageee=new Display('invoices');
                $dataaa =$displaypageee->getSpceficDataDistinct('invoiceDate');
                $displaypageeell=new Display('invoices');
                $dataaall =$displaypageeell->getAllData();
            