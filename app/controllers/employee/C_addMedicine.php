<?php
#<!-- Select Basic -->
#<!--medicineType id item_name unitPrice description existMount-->   
#<!-- id name unitPrice existMount soldMount description-->
#
if(@isset($_POST['submit']) && $_POST['submit']=="send"){
    //@$addMedicine['medicineType'] =$_POST['medicineType'];
    include_once '../../models/abastractConnect.php';
    include_once '../../models/list.php';
    include_once '../../models/Update.php';
    $li=new Display("items");
    
    include_once '../../models/validator.php';
    $valid = new validator() ;
    $kjksl= new Display('items');
    $kolo=$kjksl->getLastRecordaESC();
    $kjksl->close();
    @$addMedicine['id']=$kolo[0]['id']+1;
    
    
    

      
    
    
    if((@$arr=@$li->getAllDataByID($addMedicine['id']))!=NULL){
        //echo '<pre>';
        //print_r($arr);
        @$addMedicine['name']= $_POST['item_name'];
         @$addMedicine['unitPrice']=$_POST['unitPrice'];
         @$exist = $arr['existMount']+$_POST['existMount'];
        @$addMedicine['existMount']=$exist;
        @$addMedicine['soldMount']=0;
        @$addMedicine['desription']=$_POST['desription'];
        $li->close();
        $up = new Update($addMedicine, "items");
        $up->editData($addMedicine['id']);
        $up->close();
        header("Location:../../views/employee/index.php?page=addmedicine"); 

    }
    else{
        include_once '../../models/list.php';
        
        @$addMedicine['name']= $_POST['item_name'];
        @$addMedicine['unitPrice']=$_POST['unitPrice'];
        @$addMedicine['existMount']=$_POST['existMount'];
        @$addMedicine['soldMount']=0;
        @$addMedicine['desription']=$_POST['desription'];
        try{       
        @include  '../../models/Add.php';
        echo 'mina';
        @$alskd=new Add($addMedicine, "items");
        
        //new Add($addMedicine, "items");
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
