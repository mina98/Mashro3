<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
               
                if (isset($_POST['submit']) AND $_POST['submit'] == "confirm")
                    { 
                    include "../../models/Delete.php";
                    $updatess = new Delete('order_supply');
                    $updates = $updatess->updateRecordByID($_POST['Andrew'], 'adminConfirm', 'T', 'id');
                    $updatess->close(); 
                    $updates = new Delete('items');
                    $updatees = $updates->updateRecordByID($_POST['Andrewsss'], 'existMount', $_POST['Andrewss']+$_POST['Andrews'], 'id');
                    $updates->close();
//                    $updateitems=new Supply_Models($tablename);
//                    $update->editData($data3, $_POST['Andrew']);
//                    $data3['id']=$data2['id'];
//                    $data3['itemId']=$data2['itemId'];
//                    $data3['mount']=$data2['mount'];
//                    $data3['Price']=$data2['Price'];
//                    $data3['vendorId']=$data2['vendorId'];
//                    $data3['adminConfirm']='T';
//                    $data3['vendorConfirm']=$data2['vendorConfirm'];
//                    $data3['offerId']=$data2['offerId'];
//                    $updateitems->AddData($data4)
                  @header("location:../../views/admin/index.php?page=listOrder");
                   
                    }
               elseif (isset($_POST['submit']) AND $_POST['submit'] == "unconfirm")
                    {$delete=new Supply_Models('order_supply');
                    $delete->deletRecordByID($_POST['Andrew']);
                    @header("location:../../views/admin/index.php?page=listOrder");}
 else {
      include "../../models/Supply_Models.php";
                include "../../models/list.php";
                $tablename="order_supply";
        	$displaypage=new Supply_Models($tablename);  
                $data =$displaypage->getAllDataBy(1);
                $displaypage->close();
                $displaypagee=new Display('users');
                for ($i = 0; $i < count($data); $i++)
                {$datal =$displaypagee->getRecordByyID($data[$i]['vendorId'],'users','name','id');
                $dataa[$i]=$datal[0];
                }
                $displaypagee->close();
                $displaypagee=new Display('items');
                for ($i = 0; $i < count($data); $i++)
                {$datal =$displaypagee->getRecordByyID($data[$i]['itemId'],'items','name','id');
                 $datall =$displaypagee->getRecordByyID($data[$i]['itemId'],'items','existMount','id');
                 $datalll =$displaypagee->getRecordByyID($data[$i]['itemId'],'items','id','id'); 
                 $dataaaan[$i]=$datalll[0];
                 $dataan[$i]=$datal[0];
                 $dataaan[$i]=$datall[0];
                }
                $displaypagee->close();
 } 

          