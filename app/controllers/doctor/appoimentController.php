<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../models/Supply_Models.php";
@session_start();
/* <td>{$data[$i]['Day']}</td>;
                                    <td>{$data[$i]['appoint']}</td>;
                                    <td>{$data[$i]['patientnum']}</td>;                                    
                                     <td>{$data[$i]['patientlimit']}</td>;                                    
                                    </tr>;*/
$username=$_SESSION['username'];
//echo $username;
$getdata=new Supply_Models('appointment');
$data=$getdata->getAllDataBy(4,$username);
$getpatient=new Supply_Models('appo');
$patient=$getpatient->getAllDataBy(5,$username);
//print_r($patient);
if($_POST)
         if (isset($_POST['submit']) AND $_POST['submit'] == "add") {
       $data2['doctorid']=$_SESSION['id'];
        $data2['Day']=$_POST["Day"];
       
        $data2['appoint']=$_POST["appoint"];
        $data2['patientnum']=0;
        $data2['patientlimit']=$_POST["patientlimit"];

           $getdata->AddData($data2);
             $data=$getdata->getAllDataBy(4,$username); 
             @header('location:../../views/doctor');
             }