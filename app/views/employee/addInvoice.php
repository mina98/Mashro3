<head>
  <title>Add Invoce</title>
</head>
<body>
<div class="container ">
<br/>
<legend>Add Invoice</legend>
<br/>
<form action="../../controllers/employee/C_invoice.php" method="post" >
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ItemID</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
      <input type="submit" name="SUBMIT" value="submit">
      <input type="submit" name="ADD" value="AddAnother">
      <input type="submit" name="DEL" value="Delete">     
<?php
   include '../../controllers/employee/C_invoice.php';
    echo '<tr>
        <td> <select name="itemNAME" >';
       for ($i = 0; $i < count($BannerDataDisplaay); $i++) {
       echo '<option>'.$BannerDataDisplaay[$i]['name'].'</option>';}
     
echo ' </select></td><td><input type="number" name="Amount"  min="1" max="1000" value="$ak"></td>
    </tr>';
//include '../../controllers/employee/C_invoice.php';
if (@$_SESSION['num']!=0) {
    for($i=0;$i<$_SESSION['num'];$i++){
    @$ik = $_SESSION['nameee'][$i];
    @$ak = $_SESSION['amount'][$i];
    echo "<tr>
        <td> <select name='itemName[$i]'>";
       for ($s = 0; $s < count($BannerDataDisplaay); $s++) {
       echo "<option ";
       if($ik==$BannerDataDisplaay[$s]['name']){echo 'selected="selected"';}
       echo ">".$BannerDataDisplaay[$s]['name'].'</option>';}
    echo "</select></td><td><input type='number' name='amount[$i]' min='1' max='1000' value='$ak'></td>
    </tr>";  
    } 
    //$_SESSION['num']=0;
}
echo '</tbody></table>';
?>
</from>
</div>
</body>