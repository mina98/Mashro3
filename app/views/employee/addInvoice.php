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
    <tr>
      <td><input type="number" name="itemID"  min="1"></td>
      <td><input type="number" name="Amount"  min="1" max="1000"></td>
    </tr>
<?php
//include '../../controllers/employee/C_invoice.php';
if ($_SESSION['num']!=0) {
    for($i=0;$i<$_SESSION['num'];$i++){
    echo "<tr>
      <td><input type='number' name='itemId[$i]' min='1'></td>
      <td><input type='number' name='amount[$i]' min='1' max='1000'></td>
    </tr>";  
    } 
    //$_SESSION['num']=0;
}
echo '</tbody></table>';
echo '<input type="submit" name="ADD" value="AddAnother">';
echo '<input type="submit" name="DEL" value="Delete">';
?>
<input type="submit" name="SUBMIT" value="submit">
</from>
</div>
</body>