<?php
include_once "../../controllers/patient/reverseDoc.php";
echo'                   
                            <h1 Style="text-align:center";>Reserving page For Patient</h1>

                            <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
                       
                        <div Style="text-align:center";>        
                         <section class="table-box">
                        <table border="3" class="table" Style="text-align:center">
			<thead>
				<tr>
					
					<th>Day</th>
					<th>Time</th>
                                        <th>Doctor Name</th>
                                         <th>Reseve Button</th>   
                                        
				</tr>
			</thead>
                         ';
$f=0;
for ($i = 0; $i < count($data); $i++) {
    $j = $i + 1;
    echo"
                        <tbody>
                                      <form action = '../../controllers/patient/reverseDoc.php' method ='post'>			

                                <tr> 

                                    <td>{$data[$i]['Day']}</td>
                                    <td>{$data[$i]['appoint']}</td>
                                    <td>{$data[$i]['name']}</td>                                   
                                 ";  
                                   if(count($data4) != 0){
                                       
                                       if($data[$i]['id'] == $data4[$f]['appoint'])
                                       echo "<td>your 're resevied</td>";
                                       else            echo "<input name='Mina' style='display:none'; value=$j>       
                           <td><input type ='submit' name='submit' value='Reserve'></td>";
                                       
                                   }
                                   else{
                                       echo "<input name='Mina' style='display:none'; value=$j>       
                           <td><input type ='submit' name='submit' value='Reserve'></td>";
                                   }
                                 echo"</tr>
                               </form>  ";
}
echo '
                        </body>
                        </table>';
?>
<!--<input name='Mina' style='display:none'; value=$j>       
                           <td><input type ='submit' name='submit' value='Reserve'></td>
-->