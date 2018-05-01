<?php

@session_start(); 

if ($_POST) {
    // Login
    if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {
        include_once  '../models/Login.php';
        include_once '../models/list.php';
/*      incl
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
       $obj=new Display("users");
        $array=$obj->getAllDataByUsername($username);
        if($array[0]['acess']!='t'&& $array[0]['acess']!=NULL)
                     {
                         $_SESSION['acess']='f';
                         @ header("location:../views/loginview.php"); 
                     }
 else {       
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
                         @$_SESSION['image'] = $role ["image"];
                         
                     if ($role["type"] == 1)
                     {
                         
                          $_SESSION['type'] = "admin";
                        header("Location:../views/admin/index.php"); 
                        die();
                     }else if ($role["type"] == 2)
                     {
                         
                         $_SESSION['type'] = "employee";
                        header("Location:../views/employee/index.php"); 
                        die();
                     }else if ($role["type"] == 3)
                     {
                         $_SESSION['type'] = "doctor";
                        header("Location:../views/doctor/index.php"); 
die();
                     }
                     else if ($role["type"] == 4)
                     {
                         $_SESSION['type'] = "vendor";
                        header("Location:../views/vendor/index.php"); 
                        die();
                     }
                     else if($role["type"] == 5 &&$array[0]['acess']=='t' )
                     {
                         
                         $_SESSION['type'] = "patient";
                        header("Location:../views/patient/index.php"); 
                        die();

                     }
                     
                    }
                }else{
                    
                      echo '<div class="alert alert-success">you are pending</div>';
                        header("Refresh:1;../views/loginview.php");
                    }
                }
            
        
   
        
         catch (Exception $exc) {
             
             echo $exc->getMessage();
             header("Refresh:1;../views/loginview.php");
 }}
    }
    // Register
     if (isset($_POST['submit']) AND $_POST['submit'] == "Register") {
     @  include_once '../models/Register.php';
        @include_once  '../models/list.php';
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
    try{
        
        
    $objj= new Display("users");
    $array=$objj->getLastRecordDESC();
    $id=$array[0]+1;
    
            $data['name']      = $_POST['name'];
            $data['username']  = $_POST['username'];
            $data['password']  = $_POST['password'];
            $data['adress']    = $_POST['adress'];
            $data['email']     = $_POST['email']; 
            $data['image'] = '../../../test-samer/assets/img/face.png'; 
          //  $data['type'] = '3';
          
            $_SESSION['EMAIL']=$_POST['email']; 
            $_SESSION['UERname']=$_POST['username'];
            $usertype=5;
            $acesscode=$id.$_POST['username'].$usertype;
            $data['acesscode']=$acesscode;
            $data['acess']='f';
           $_SESSION['acesscode']=$acesscode;
 
            
       @new Register($data);
        //
           include_once './C_Email.php';
         header("location:../views/loginview.php"); 
        }
        catch (Exception $exc) {
          echo"dsdd";
            echo $exc->getMessage();
        }
        
          
    }
     if (isset($_POST['submit']) AND $_POST['submit'] == "acess")
     {
         include_once '../models/list.php';
         include_once '../models/Update.php';
      $acesscode=   $_POST['acesscode'];
      try{
      if($_SESSION['acesscode']==$acesscode)
      {
        
        $disobj=new Display("users");
        $data=$disobj->getAllDataByacesscode($acesscode, "users");
  //      print_r($data);
        $id=$data[0]['id'];
        $data['acess']='t';
        $data[0]['10']='t';
//        print_r($data);
        $new=$data[0];
        $upobj=new Update($new, "users");
        $check=$upobj->updateRecordByID($id, 'acess', 't', 'id');
        $_SESSION['acess']='t';
        @ header("Location:../views/loginview.php");
      }
     } catch (Exception $ex)
     {
       $ex->getMessage();         
     }
     }
else {
   include "../views/loginview.php";
}
}
?>
