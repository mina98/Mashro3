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
        
        include_once '../models/validator.php';
        $valid = new validator();
        
        
         $SecDataedit['id'] = $_POST ['idd'];
         if($valid->checkChar($_POST['name'], 'name')==TRUE)
         {
             $SecDataedit['name']     = $_POST['name'];
         }
         else
         {
              echo '<script type="text/javascript"> alert("name not valid !"); history.back();</script>';
            
         }
         
         
         if($_POST['passwordagain1']==''){
             
             
             if($valid->checkPasswordlength($_POST['password'], 'password')== TRUE && $valid->checkStings($_POST['password'], 'password')==TRUE)
         {
             $SecDataedit['password']     = $_POST['password'];
         }
         else
         {
              echo '<script type="text/javascript"> alert("passsword  not valid !"); history.back();</script>';
            
         }
         }
         else{
         $SecDataedit['password']    = $_POST['passwordagain1'];
         }
         
         if($valid->checkEmail($_POST['email'], 'email')==TRUE)
         {
             $SecDataedit['email']  = $_POST['email'];
         }
         else
         {
              echo '<script type="text/javascript"> alert("email not valid !"); history.back();</script>';
         }
         
         
          if($valid->checkStings($_POST['address'], 'adress')==TRUE )
         {
             $SecDataedit['adress']     = $_POST['address'];
         }
         else
         {
              echo '<script type="text/javascript"> alert("adresss not valid !"); history.back();</script>';
            
         }
         
         //$SecDataedit['adress'] = $_POST['address'];
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
         //print_r($SecDataedit);
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
