<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
@session_start();
include_once "../../models/Supply_Models.php";
$username = $_SESSION['username'];

$getdata = new Supply_Models('appointment');
$data = $getdata->getAllDataBy(6, $username);
//print_r($data);
$getreseve = new Supply_Models('appo');
$data4 = $getreseve->getAllDataBy(7, $_SESSION['id']);

echo"<br><br>";
//print_r($data4);
if ($_POST)
    if (isset($_POST['submit']) AND $_POST['submit'] == "Reserve") {

        $data2 = $getdata->getRecordByID($_POST['Mina']);

        //`id`, `patientid`, `appoint`
        $getdataId = new Supply_Models('appo');
        $data3['patientid'] = $_SESSION['id'];
        $data3['appoint'] = $data2['id'];
        
        $getdataId->AddData($data3);
        $data5=$getdata->getAllDataBy(8, $_POST['Minaa']);
        print_r($data5);
        //`id`, `doctorid`, `Day`, `appoint`, `patientlimit`, `patientnum`
       
        $data6['id']=$data5[0]['id'];
        $data6['doctorid']=$data5[0]['doctorid'];
        $data6['Day']=$data5[0]['Day'];
        $data6['appoint']=$data5[0]['appoint'];
        $data6['patientlimit']=$data5[0]['patientlimit'];
            $data6['patientnum']= $data5[0]['patientnum']+'1';
        $getdata->editData($data6,$_POST['Minaa']);
//       $dataFupdate= $getdata->getRecordByID($data2['id']);
//        print_r($dataFupdate);
        $data4 = $getreseve->getAllDataBy(7, $_SESSION['id']);
        
        $data = $getdata->getAllDataBy(6, $username);
        @header('location:../../views/patient/?page=service');
    }
            