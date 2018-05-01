<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *///<!--medicineType id item_name unitPrice description existMount-->   

if(@isset($_POST['update']) && $_POST['update']=="update"){
    echo 'out';
    
    include '../../models/abastractConnect.php';
    include '../../models/list.php';
    $li =new Display("items");
    include '../../models/Update.php';
    @$update['id']=$_POST['id'];
    @$update['name']=$_POST['item_name'];
    $arr=$li->getAllDataByID($update['id']);
    @$update['soldMount']=$arr[0]['soldMount'];
    @$update['existMount']=$arr[0]['existMount'];
    @$update['unitPrice']=$_POST['unitPrice'];
    @$update['desription']=$_POST['desription'];
    
    $li->close();
    $upd =new Update($update, "items");
    $upd->editData($update['id']);
    include '../../views/employee/update.php';
    
    $upd->editData($update['id']);
    header('Location:../../views/employee/index.php?page=listmedicine');

    
}
if (isset ($_GET['action']) && $_GET['action']=='update'){
    $id =$_GET['id'];
    include_once '../../models/abastractConnect.php';
    include_once '../../models/list.php';
    $li =new Display("items");
    include_once  '../../models/Update.php';
    $arr=$li->getAllDataByID($id);
    include_once  '../../views/employee/update.php';
}


