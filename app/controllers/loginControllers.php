<?php

@session_start(); 

if ($_POST) {
    // Login
    if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {
        include '../models/Login.php';
        
        try {
            include_once  '../models/validator.php';
            
            // validator => $_POST # $rules ;
            $valid = new validator();            
            $rules = array("username" => "checkStings");
           // $rules = array("password" => "checkPassword");
            if($valid->validate($_POST, $rules))
                $username = $_POST['username'];
            
            $password = $_POST['password'];
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }

//            $username = $_POST['username'];
  //          $password = $_POST['password'];
      
        try {
            
            $login = new Login($username, $password);

            if ($login == TRUE) {
                @$role = $login->getrole($username);
                @ $statue = $role['active'];
                if ($statue =='active')
                    {
                        @session_start();
                         @$_SESSION['username'] = $username;
                         
                         @$_SESSION['id'] = $role["id"];
                        
                
                     if ($role["type"] == 1)
                     {
                          $_SESSION['type'] = "admin";
                        header("Location:../views/admin/index.php"); 

                     }else if ($role["type"] == 2)
                     {
                         $_SESSION['type'] = "employee";
                        header("Location:../views/employee/index.php"); 

                     }else if ($role["type"] == 3)
                     {
                         $_SESSION['type'] = "doctor";
                        header("Location:../views/doctor/index.php"); 

                     }
                     else if ($role["type"] == 4)
                     {
                         $_SESSION['type'] = "vendor";
                        header("Location:../views/vendor/index.php"); 

                     }
                     else if($role["type"] == 5)
                     {
                         $_SESSION['type'] = "patient";
                        header("Location:../views/patient/index.php"); 

                     }
                
                }else{
                    
                      echo '<div class="alert alert-success">you are pending</div>';
                        header("Refresh:1;../views/loginview.php");
                    }
                }
            }
        
   
        
         catch (Exception $exc) {
             
             echo $exc->getMessage();
             header("Refresh:1;../views/loginview.php");
    }
    }
    // Register
     if (isset($_POST['submit']) AND $_POST['submit'] == "Register") {
        
         include_once '../../models/abastractConnect.php';
         include_once '../../models/validator.php';
         //$valid = new validator();
        include_once  '../models/Register.php';
       
         
        try {
          
            $data['name']      = $_POST['name'];
            $data['username']  = $_POST['username'];
            $data['password']  = $_POST['password'];
            $data['adress']    = $_POST['adress'];
            $data['email']     = $_POST['email'];
            
            $rules = array(
                
                
                "name" => "checkRequired|checkChar", 
                "username" => "checkRequired|checkStings|checkusername",
                "password" => "checkRequired|checkPasswordlength",
                "email" => "checkRequired|checkEmail"
            );
          //  echo $valid->checkusername($data["username"]);
            $valid = new validator;
           if ($valid->validate($_POST, $rules) == FALSE)
           {   
               header("location:../views/loginview.php");
              // die();
           }
           else
           {
              $_SESSION['EMAIL']=$_POST['email']; 
            $_SESSION['UERname']=$_POST['username'];
       
        try {
            //
            new Register($data);
           include_once './C_Email.php';
             header("location:../views/loginview.php"); 
        }
        catch (Exception $exc) {
          echo"dsdd";
            echo $exc->getMessage();
        }
           }
                    
        }catch (Exception $exc) {
            echo $exc->getMessage();
            //die();
        }
     }
         
}else {
   include "../views/loginview.php";
}
?>
