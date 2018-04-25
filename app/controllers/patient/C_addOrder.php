<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(@$_POST){
    if(@isset($_POST['pay']) && $_POST['pay']=="pay"){
        include_once '../../models/abastractConnect.php';
        include_once '../../models/Add.php';
        include_once '../../models/list.php';
        include_once '../../models/Addinvoice.php';
        /*foreach ($_POST['id'] as $value) {
            echo $value;
        }*/
        $li = new Display('items');
        $arr = $li->getAllDataBynameofmed($_POST['name'], "name");
        if($arr[0]['existMount']<$_POST['amount']){
            echo '<script type="text/javascript">alert("not engh amount");historu.back();</script>';
        }
        else{
        @$data['itemName']=$_POST['name'];
        @$data['amount']=$_POST['amount'];
        $inv = new addd($data);
        $inv->close();
        $liInvoiced = new Display('invoices');
        $lastinvoice = $liInvoiced->getLastRecordDESC();
        $orderData['invoiceId'] =$lastinvoice['id'];
        $liInvoiced->close();
        
        $getid = new Display('users');
        
        $arr = $getid->getAllDataByUsername($_SESSION['username']);
        $orderData['patientId'] = $arr[0]['id'];
        $patient_adress = $arr[0]['adress'];
        $addIntoOrder = new Add($orderData, 'order_patient');
        }
        include_once '../../views/patient/addOrder.php';
    }
}
 else {
    include_once '../../views/patient/addOrder.php';
}