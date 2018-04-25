<?php

include_once 'abastractConnect.php';
@session_start();
//$_SESSION['error'] = $ar();
class validator extends abastractConnect {

public function __construct() {
        
        $this->connectToDb();

       
    }
    function validate($data, $rules) {
        $valid = TRUE;

        foreach ($rules as $key => $rule) {
            // Extract rules 
            $callbacks = explode('|', $rule);
            foreach ($callbacks as $callback) {
                $value = isset($data[$key]) ? $data[$key] : NULL;
                if (is_array($value)) {
                    foreach ($value as $val) {
                        if ($this->$callback($val, $key) == FALSE)
                            $valid = FALSE;
                     
                      //  return False ;
                    }
                } else {
                    if ($this->$callback($value, $key) == FALSE)
                        $valid = FALSE;
                   
                    //return False ;
                }
            }
        }
        return $valid;
    }
    
        function checkStings($value,$key) {
        $pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
        $validate = preg_match($pattern, $value);
        if ($validate == FALSE)
        {
         //   echo '<script type="text/javascript"> alert("not string !"); history.back();</script>';
            
            @$_SESSION['error'][0]=$key;
      //     print_r($_SESSION);
            //throw new Exception("Error: the $key must be a string");
          return FALSE;
        }
        else 
            return TRUE;
    }
// check username if exist or not password too + in db they are uniqe bs 3a4an al mydrab4 db error lw da5al wa7d mwgod
    function checkusername($value,$key) {
      //  $db = new abastractConnect();
      // $this->connectToDb();
        $checku = '' ;
        $checkp ='';
       $sql = "SELECT `username`,`password` FROM `users` WHERE `username` = '$value'";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetch();
        $checkp = $data['password'];
        $checku = $data['username'];
      //  print_r($data);
         $this->close();
        if ($checkp == '' && $checku == '')
        {
            
            return TRUE ;
        }
        else {
           // echo '<script type="text/javascript"> alert("username oraldy exist !"); history.back();</script>';
            
            @$_SESSION['error'][1]=$key;
            //echo 'username already exist or password';
            return FALSE ;
        }
          
    }
    
    function checkPasswordlength($value,$key) {
       if (strlen($value)>5)
       {
          return TRUE;
         
       }else{ 
              
          //echo '<script type="text/javascript"> alert("password  must be at least 5 characters !"); history.back();</script>';
            ;
           @$_SESSION['error'][2]=$key;
           return FALSE;
       }
    }
    // just char not char + digits
    function checkChar($value, $key) {
        $pattern = "/^[a-zA-Z\p{Cyrillic}\s\-]+$/u";
        $validate = preg_match($pattern, $value);

        if ($validate == FALSE)
        {
          //  echo '<script type="text/javascript"> alert("name must be characters only!"); history.back();</script>';
            
           @$_SESSION['error'][3]=$key; 
        return FALSE;
            //throw new Exception("Error: the $key must be a only characters");
}
       else {
            
           return TRUE;

       }
           
               }
   // 7ta regex 7elwa de ll email
    function checkEmail($value, $key) {
       $pattern = "/^[a-zA-Z0-9 -]+@(gmail|hotmail|yahoo)\.com$/u";
        $validate = preg_match($pattern, $value);
        if ($validate == FALSE)
        { //echo 'not correct format';
          //  echo '<script type="text/javascript"> alert("not valid email!"); history.back();</script>';
            
            @$_SESSION['error'][4]=$key;
          return FALSE;
        }
        else 
            return TRUE;
    }

    function checkInteger($value) {
        $validate = filter_var($value, FILTER_VALIDATE_INT);

        if ($value>0)
            return True;
        else {
            
        return false;}
           // throw new Exception("Error: the $key must be a valid INT");

    }

     function checkPositive($value) {
       $pattern = "/^\+?([1-9]|0.)[0-9\.]*$/u";
        $validate = preg_match($pattern, $value);
        if ($validate == FALSE)
        { //echo 'not correct format';
          //  echo '<script type="text/javascript"> alert("not valid email!"); history.back();</script>';
          return FALSE;
        }
        else 
            return TRUE;
    }

    function checkRequired($value, $key) {
        $validate = !empty($value);

        if ($validate == FALSE){
            @$_SESSION['error'][5]=$key;
            return TRUE ;
        }
            //throw new Exception("Error: the $key is required");

       else return TRUE;;
    }
/*
    function sanitizeItem($value, $key) {
        $flag = NULL;

        switch ($key) {
            case 'email':
                $value = substr($value, 0, 250);
                $filter = FILTER_SANITIZE_EMAIL;
                break;

            case 'url':
                $filter = FILTER_SANITIZE_URL;
                break;

            case 'int':
                $filter = FILTER_SANITIZE_NUMBER_INT;
                break;

            default:
                $filter = FILTER_SANITIZE_STRING;
                $flag = FILTER_FLAG_NO_ENCODE_QUOTES;
                break;
        }
        $validate = filter_var($value, $filter, $flag);
        if ($validate == FALSE)
            throw new Exception("Error: the $key is invalid!");

        return $validate;
    }
*/
  

}
