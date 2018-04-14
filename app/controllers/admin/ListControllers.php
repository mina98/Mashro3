<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../models/Supply_Models.php";
                $tablename="order_supply";
        	$displaypage=new Supply_Models($tablename);  
                $data =$displaypage->getAllDataBy();
                if (isset($_POST['submit']) AND $_POST['submit'] == "confirm")
                    { 
                  
                    
                    $Read=new Supply_Models($tablename);
                    $data2= $Read->getRecordByID($_POST['Andrew']);
                   print_r($data2);
                    //`id`, `itemId`, `mount`, `Price`, `vendorId`, `adminConfirm`, `vendorConfirm`, `offerId`
                    $data3['id']=$data2['id'];
                    $data3['itemId']=$data2['itemId'];
                    $data3['mount']=$data2['mount'];
                    $data3['Price']=$data2['Price'];
                    $data3['vendorId']=$data2['vendorId'];
                    $data3['adminConfirm']='T';
                    $data3['vendorConfirm']=$data2['vendorConfirm'];
                    $data3['offerId']=$data2['offerId'];
                   

                    $update=new Supply_Models($tablename);
                    $update->editData($data3, $_POST['Andrew']);
                   
                  @header("location:../../views/admin/index.php?page=listOrder");
                   
                    }
               else if (isset($_POST['submit']) AND $_POST['submit'] == "unconfirm")
                    {$delete=new Supply_Models('order_supply');
                    $delete->deletRecordByID($_POST['Andrew']);
                    @header("location:../../views/admin/index.php?page=listOrder");}
               

          