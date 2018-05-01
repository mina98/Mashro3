   <!-- Bootstrap core CSS -->
    <link href="../../../test-samer/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../test-samer/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../../test-samer/assets/css/style.css" rel="stylesheet">
    <link href="../../../test-samer/assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../test-samer/css/style.css">
        
        
<div class="container">

    

<!-- Form Name -->
<br/>

<!-- Select Basic -->
    
<br/>
<br/>
<div id="f-accordion">
    <h3><i class="fa fa-tasks"></i> Avalible offers</h3>
  <div>
  
    <p>
    show all medicine we have
    </p>
	
	<aside class="alert success">
  <p><i class="icon fa fa-envelope-o"></i> Roger Roger, Message Received. <i class="close fa fa-times"></i></p>
</aside><!-- end alert -->

<!---
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
---->
<input type="search" class="light-table-filter" data-table="order-table" placeholder="FILTER " /> <a class="button"><i class="fa fa-exclamation-circle"></i> Report Error</a>
	<section class="table-box">
		<table class="order-table">
			<thead>
				<tr>
					<th>id</th>
					<th>item</th>
					<th>vendor</th>
                                        <th>Unit Price</th>
                                        <th>Descrebition</th>
                                        <td>Amount</td>
                                        <td>Confirm</td>
                                        <td</td>
                                        
                                       
				</tr>
			</thead>
                        <tbody>
                            <?php
                        include_once"../../controllers/admin/makeController.php";
                        for ($i = 0; $i < count($data); $i++)
                       echo "
                           <tr>
                      		<form action = '../../controllers/admin/makeController.php' method ='post'>			
                                 
                                        <td>{$data[$i]['id']}</td>
					<td>{$dataps[$i]}</td>
					<td>{$datap[$i]}</td>
                                        <td>{$data[$i]['unitPrice']}</td>
                                        <td>{$data[$i]['description']}</td>
                                        <td><input type ='number' name ='Mmount' placeholder='Mount you Need' min='0'></td>
                                        <input type=text  style='display:none; ' name='Andrew' value= {$data[$i]['id']}>
                                        <td><input type ='submit' name ='submit' value='order'></td>
                                        </form>
				</tr>
			"
                        	
                        
                        ?>
                                </tbody>

               
		</table>
	</section>
	
  </div>

        <script>
        function func(){
            
            ned= documents.getElmentById('mina').value;
        }
        
        </script>
        
    