<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
@session_start();
//if ($_POST)
if(isset($_POST['user_comm'])){
    include_once '../../models/Add.php';
    echo"ddddddddddddddd";
     $data['name'] = $_SESSION['username'];
     $data['comment'] = $_POST['user_comm'];
     print_r($data);
     try {
        $tablename = "commentt";
        $Secadd = new Add($data, $tablename);
       // $addSec = $Secadd->AddData($data);
          if($Secadd)
            {
                echo '<script type="text/javascript"> alert("The Section was commented !"); history.back();</script>';
            }  
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
}
/*if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysql_query("insert into comments values('','$name','$comment',CURRENT_TIMESTAMP)");
  
  $id=mysql_insert_id($insert);

  $select=mysql_query("select name,comment,post_time from comments where name='$name' and comment='$comment' and id='$id'");
  
  if($row=mysql_fetch_array($select))
  {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];*/
include_once '../../models/list.php';
$tablename= "commentt" ;
$addSecDis=   new Display($tablename);
$find_comment =$addSecDis->getAllData();

//include_once  '../../views/patient/index.php';    