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
      <td><input type="number" name="itemID" required="required" min="1"></td>
      <td><input type="number" name="Amount" required="required" min="1" max="1000"></td>
    </tr>
  </tbody>
</table>
<input type="submit" name="SUBMIT" value="submit" required="required">
</from>

</div>
</body>