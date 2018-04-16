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
    @$update['soldMount']=$arr['soldMount'];
    @$update['existMount']=$arr['existMount'];
    @$update['unitPrice']=$_POST['unitPrice'];
    @$update['desription']=$_POST['desription'];

    $li->close();
    $upd =new Update($update, "items");
    $upd->editData($update['id']);
    include '../../views/employee/update.php';
    
}
 else {
    echo 'in';
    include '../../views/employee/update.php';
}

