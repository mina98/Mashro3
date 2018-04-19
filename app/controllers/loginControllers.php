<?php

@session_start(); 

if ($_POST) {
    // Login
    if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {
        include "../models/Login.php";
/*
        try {
            // validator => $_POST # $rules ;
            $valid = new Validator();            
            $rules = array("username" => "checkStings");
            
            if($valid->validate($_POST, $rules))
                $username = $_POST['username'];
            
            $password = $_POST['password'];
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }
*/
            $username = $_POST['username'];
            $password = $_POST['password'];
      
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
        include "../models/Register.php";

/*
 * 
        try {
            // validator => $_P0OST # $rules ;
            $valid = new Validator();

            $data['name'] = $_POST['name'];
            $data['email'] = $valid->sanitizeItem($_POST['email'], 'email');
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];

            $rules = array(
                "name" => "checkRequired|checkStings",
                "email" => "checkRequired|checkEmail",
                "username" => "checkRequired|checkStings",
                "password" => "checkRequired"
            );
            if (!$valid->validate($data, $rules))
                die();
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }
 * 
 */
    //`id`, `name`, `username`, `password`, `adress`, `email`, `image`, `type`

            $data['name']      = $_POST['name'];
            $data['username']  = $_POST['username'];
            $data['password']  = $_POST['password'];
            $data['adress']    = $_POST['adress'];
            $data['email']     = $_POST['email']; 
           // $data['image'] = 'image.jpg'; 
          //  $data['type'] = '3';
            
            
        try {
            echo"sss";
            new Register($data);
            
        } catch (Exception $exc) {
          echo"dsdd";
            echo $exc->getMessage();
        }
        
          
    }
} else {
   include "../views/loginview.php";
}
?>
