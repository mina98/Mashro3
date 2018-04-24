<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_POST){
 if (isset($_GET['action']) AND $_GET['action'] == "")
     {
         $tablename = "users";         
         $editSecDis = new Display($tablename);
         $recSecdata = $editSecDis->getRecordByID($id);
        // $editSecDis->close();
         include '../../views/admin/editProfile.php';
     }
     if (isset($_POST['submit']) && $_POST['submit'] == "save")
     {
        include '../models/Update.php';
         $SecDataedit['id'] = $_POST ['idd'];
         $SecDataedit['name']     = $_POST['name'];
         if($_POST['passwordagain1']==''){
             $SecDataedit['password']    = $_POST['password'];
         }
         else{
         $SecDataedit['password']    = $_POST['passwordagain1'];
         }
         $SecDataedit['email'] = $_POST['email'];
         $SecDataedit['adress'] = $_POST['address'];
         //$isd=$SecDataedit['id']; 
         if(isset($_FILES)){
             $filename = $_FILES['image']['name'];
             $fileext  = strtolower(end(explode('.', $filename)));
             $filetempname =$_FILES['image']['tmp_name'];
             $destination = '../../test-samer/assets/img/'.$filename;
             move_uploaded_file($filetempname, $destination);
             $SecDataedit['image']='../'.$destination;
             
         }
         else{
              $SecDataedit['image']= $recSecdata['image'];
         }
         print_r($SecDataedit);
         try {                        
            $tablename = "users";
            $SecUpdate = new Update($SecDataedit, $tablename);
            $updtSec = $SecUpdate->editData($SecDataedit['id']);
            if($updtSec)
            {
                echo '<script type="text/javascript"> alert("The Section was updated !"); history.back();</script>';
            }            
         } catch (Exception $exc) {
             echo $exc->getMessage();
         }
              
     }
    
}
else {
    include '../../models/list.php';
 $tablename = 'users';
 $displaySec = new Display($tablename);
 //session_start();
 $SecDataDisplaya = $displaySec->getRecordByusername($_SESSION['username'],$tablename,"*","username");

}
