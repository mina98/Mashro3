<?php
#<!-- Select Basic -->
#<!--medicineType id item_name unitPrice description existMount-->   
#<!-- id name unitPrice existMount soldMount description-->
#
if(@isset($_POST['submit']) && $_POST['submit']=="send"){
    //@$addMedicine['medicineType'] =$_POST['medicineType'];
    include '../../models/abastractConnect.php';
    include '../../models/list.php';
    include '../../models/Update.php';
    $li=new Display("items");
    
    include_once '../../models/validator.php';
    $valid = new validator() ;
    
    @$addMedicine['id']=$_POST['id'];
    
     if($valid->checkChar($_POST['item_name'], 'name')==TRUE)
         {
            @$addMedicine['name']= $_POST['item_name'];
         }
         else
         {
              echo '<script type="text/javascript"> alert("name not valid !"); history.back();</script>';
            
         }
    
    
    if(($arr=$li->getAllDataByID($addMedicine['id']))!=NULL){
        //echo '<pre>';
        //print_r($arr);
        @$addMedicine['soldMount']=$_POST['soldMount'];
        @$exist = $arr['existMount']+$_POST['existMount'];
        @$addMedicine['existMount']=$exist;
        @$addMedicine['unitPrice']=$_POST['unitPrice'];
        @$addMedicine['desription']=$_POST['desription'];
        $li->close();
        $up = new Update($addMedicine, "items");
        $up->editData($addMedicine['id']);
        $up->close();
        header("Location:../../views/employee/index.php?page=addmedicine"); 

    }
    else{
        @$addMedicine['soldMount']=0;
        @$addMedicine['existMount']=$_POST['existMount'];
        @$addMedicine['unitPrice']=$_POST['unitPrice'];
        @$addMedicine['desription']=$_POST['desription'];
        try{
        
        include_once  '../../models/Add.php';
        new Add($addMedicine, "items");
        echo 'added succeffully ';
        header("Location:../../views/employee/index.php?page=addmedicine"); 
    } catch (Exception $ex) {
        echo $ex->getMessage ."Jj";
    }
    }
    
}

else {
    include '../../views/employee/addMedicine.php';
}
