<?php



if ($_POST) {
   
    
   if (isset($_POST['submit']) AND $_POST['submit'] == "add") {
        
        include "../../models/Add.php";
        //id 	name 	username 	password 	adress 	email 	image 	type 
        $date['id'] = "";
        $date['name'] = $_POST["username"];
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
    
    
    // change staue
    if (isset($_POST['submit']) AND $_POST['submit'] == "change statue")
    {
        include '../../models/list.php';
        $tablename = "users";
        $disblaybanner = new Display($tablename);
        
    }
    
    
 }

else{
    include '../../models/list.php';
    $tablename = "users";
    $disblaybanner = new Display($tablename);
    $b =$disblaybanner->getAllData();
    
}