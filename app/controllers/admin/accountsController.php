<?php

//session_start();

if ($_POST) {
   
    
   if (isset($_POST['submit']) AND $_POST['submit'] == "add") {
       
       
       include_once '../../models/abastractConnect.php';
       include_once '../../models/validator.php';
       $valid = new validator();
       include_once  "../../models/Add.php";
       
       
    //id 	name 	username 	password 	adress 	email 	image 	type 
        $date['id'] = "";
        
        $date['name'] = $_POST["name"];
        $date['username'] = $_POST["username"];
        $date['password'] = $_POST["password"];
        $date['adress'] = $_POST["adress"];
        $date['email'] = $_POST["email"];
        $date['image'] = "";
        //$date['type']=2;
       
       
        $type = $_POST["usertype"];
        //echo $type;
        
        if($type == "employee")
        {
            $date["type"] = 2;
        }
        else if($type == "doctor")
        {
            $date["type"] = 3;
        }
        else if($type == "vendor")
        {
            $date["type"] = 4;
         
        }
        
        $date['active'] = "active";
        
        
         $rules = array(
                
                
                "name" => "checkRequired|checkChar",  
                "username" => "checkRequired|checkStings|checkusername",
                "password" => "checkRequired|checkPasswordlength",
                "adress" => "checkRequired|checkStings",
                "email" => "checkRequired|checkEmail",
                
            );
          //  echo $valid->checkusername($data["username"]);
         $valid = new validator();
           if ($valid->validate($_POST, $rules) == FALSE)
           {   
               echo '<script type="text/javascript"> alert("data not valid !"); history.back();</script>';
            
           }
  else{      
        $tablename = "users";
        try {
            $adduser = new Add($date, $tablename);

            if ($adduser) {
                echo '<script type="text/javascript"> alert("The New user was added !"); history.back();</script>';
            
                header("location:../../views/admin/index.php?page=listAccount");
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        
    }
    
   }
    // change staue
    if (isset($_POST['submit']) AND $_POST['submit'] == "change statue")
    {
        $userid = $_POST['uid'];
        include '../../models/general.php';
        //$tablename = "users";
        $object = new general() ;
        $object->change($userid);
        header("location:../../views/admin/index.php?page=listAccount");
    }
    
    
 }

else{
    include '../../models/list.php';
    $tablename = "users";
    $disblaybanner = new Display($tablename);
    $b =$disblaybanner->getAllData();
    
}