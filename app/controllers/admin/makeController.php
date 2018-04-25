<?php
//include "../../views/admin/index.php";
include '../../models/Supply_Models.php';
include '../../models/list.php';
        $tablename="offers";
    	$displaypage=new Display($tablename);  
    	$data =$displaypage->getdataorder('unitPrice');
    	$displaypage->close();
        $displaypage=new Display('users');
        for ($i = 0; $i < count($data); $i++){
        $datap[$i]=$displaypage->getRecordByID($data[$i]['vendorId'],'users','name','id');
        $dataps[$i]=$displaypage->getRecordByID($data[$i]['itemId'],'items','name','id');
        }
    	$displaypage->close();
         if (isset($_POST['submit']) AND $_POST['submit'] == "order") {
         
             $tablename1="offers";
             
              $data=new Supply_Models('offers');
              $a=$data->getRecordByID($_POST['Andrew']);
              $data->close();
              $data=new Display('order_supply');
              $x=$data->getLastRecordDESC();
              $data->close();
             //`id`, `itemId`, `unitPrice`, `description`, `vendorId`
             //`id`, `itemId`, `mount`, `Price`, `vendorId`, `adminConfirm`, `vendorConfirm`, `offerId`   
             if(x[0]['id']!=NULL){
              $Entere['id']= $x[0]['id']+1;
             }
                 $Entere['itemId']= $a['itemId'];
                 $Entere['mount']= $_POST['Mmount'];
                 $Entere['Price']= $a['unitPrice'] ;
                 $Entere['vendorId']= $a['vendorId'];
                 $Entere['adminConfirm']= 'F';
                 $Entere['vendorConfirm']= 'F';
             
            $tablename2="order_supply";              
            $data2=new Supply_Models($tablename2);
            $adds=$data2->AddData($Entere);
            $data3=new Supply_Models($tablename1);
            $data3->deletRecordByID($_POST['Andrew']);
            header("location:../../views/admin/index.php?page=addOrder");
         }


