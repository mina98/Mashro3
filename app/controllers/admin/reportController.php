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
                $displaypageeell->close();
                $dlgk= new Display('invoices');
                $gkhj=$dlgk->getAllData();
                  for ($i = 0; $i < count($dataa); $i++){
      $dataPoints[$i] = array("label"=>$dataa[$i]['name'] , "y"=> ($dataa[$i]['soldMount']/$dataa[$i]['existMount']));
      $dataPointss[$i]=array("y" => $dataa[$i]['existMount'], "label" => $dataa[$i]['name'] );    
  }
   for($i=0;$i < count($dataaa);$i++){
       $counts[$i]=0;
   }
   for($i=0;$i < count($gkhj);$i++){
       $monh[$i]=explode('-',$gkhj[$i]['invoiceDate']);
   }
   $koks1=0;
   $month[$koks1]=$monh[0][1];
   $countss[$koks1]=0;
   $koks1++;
   for($i=1;$i < count($gkhj);$i++){
       if($monh[$i][1]!=$monh[$i-1][1]){
       $month[$koks1]=$monh[$i][1];
       $countss[$koks1]=0;
       $koks1++;
       }
   }
   for($i=0;$i < count($month);$i++){
       for($k=0;$k < count($gkhj);$k++){
       if($month[$i]==$monh[$k][1]){
        $countss[$i]++;
       }
   }
}
  for($i=0;$i < count($dataaa);$i++){
    for($j=0;$j < count($dataaall);$j++){
        if($dataaall[$j]["invoiceDate"]==$dataaa[$i]["invoiceDate"]){
         $counts[$i]++;  
        }
    }
}
    for($i=0;$i < count($dataaa) && $i<10 ;$i++){  
       $dataPointsss[$i]=array("y" =>$counts[$i], "label" => $dataaa[$i]['invoiceDate']);
    }   
    for($i=0;$i < count($month) && $i<12 ;$i++){  
       $dataPointsssp[$i]=array("y" =>$countss[$i], "label" => $month[$i]);
    }