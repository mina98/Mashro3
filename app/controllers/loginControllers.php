<?php

/*
 * awebarts:: LoginController
 */


//include "../models/Database.php";
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
                session_start();
                $_SESSION['username'] = $username;
                header("Location:../views/admin/index.php");
            }
        
        } catch (Exception $exc) {
             echo $exc->getMessage();
             echo "please Try agin"; include "../views/loginview.php";
        }
    }
    // Register
     if (isset($_POST['submit']) AND $_POST['submit'] == "Register") {
        include "../models/Register.php";
echo "aaaaaaaaaaaaa";
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
