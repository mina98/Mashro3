<?php
//include "../../views/admin/index.php";
include_once '../../models/Supply_Models.php';

        $tablename="offers";
    	$displaypage=new Supply_Models($tablename);  
    	$data =$displaypage->getAllData();
    	       
         if (isset($_POST['submit']) AND $_POST['submit'] == "order") {
         
             $tablename1="offers";
             
              $data=new Supply_Models('offers');
              $a=$data->getRecordByID($_POST['Andrew']);
             //`id`, `itemId`, `unitPrice`, `description`, `vendorId`
             //`id`, `itemId`, `mount`, `Price`, `vendorId`, `adminConfirm`, `vendorConfirm`, `offerId`   
                $Entere['id']= $a['id'];
                 $Entere['itemId']= $a['itemId'];
                 $Entere['mount']= '12';
                 $Entere['Price']= $a['unitPrice'] ;
                 $Entere['vendorId']= $a['vendorId'];
                 $Entere['adminConfirm']= 'F';
                 $Entere['vendorConfirm']= 'F';
                 $Entere['offerId']= '12';
             
            $tablename2="order_supply";              
                 $data2=new Supply_Models($tablename2);
                 
              
              $adds=$data2->AddData($Entere);
              $data3=new Supply_Models($tablename1);
              $data3->deletRecordByID($_POST['Andrew']);
              header("location:../../views/admin/index.php?page=addOrder");
         }


