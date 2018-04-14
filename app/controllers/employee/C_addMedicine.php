<?php
#<!-- Select Basic -->
#<!--medicineType id item_name unitPrice description existMount-->   
#<!-- id name unitPrice existMount soldMount description-->
#
if ($_POST) {
    echo'dv';
if(isset($_POST['submit']) && $_POST['submit']=="send"){
    //@$addMedicine['medicineType'] =$_POST['medicineType'];
    //include '../../models/abastractConnect.php';
    include '../../models/list.php';
    
    $li=new Display("items");
    
    
    @$addMedicine['id']=$_POST['id'];
    @$addMedicine['name']=$_POST['item_name'];
    
    if(($arr=$li->getAllDataByID($addMedicine['id']))!=NULL){
        //echo '<pre>';
        //print_r($arr);include '../../models/Update.php';
        echo"ssssssssssss";
        include "../../models/Update.php";
    
        @$addMedicine['soldMount']=$_POST['soldMount'];
        @$exist = $arr['existMount']+$_POST['existMount'];
        @$addMedicine['existMount']=$exist;
        @$addMedicine['unitPrice']=$_POST['unitPrice'];
        @$addMedicine['description']=$_POST['description'];
        $li->close();
        $up = new Update($addMedicine, "items");
        $up->editData($addMedicine['id']);
        $up->close();
       // include '../../views/employee/addMedicine.php';
    }
    else{
        @$addMedicine['soldMount']=0;
        @$addMedicine['existMount']=$_POST['existMount'];
        @$addMedicine['unitPrice']=$_POST['unitPrice'];
        @$addMedicine['description']=$_POST['description'];
        try{
        
        include '../../models/Add.php';
        
        new Add($addMedicine, "items");
        echo 'added succeffully ';
       // include '../../views/employee/addMedicine.php';
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    }
    
}
}
else {
    echo 'ay 7aga';
   // include 'addMedicine.php';
}
