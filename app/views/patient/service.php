<?php

include_once "../../controllers/patient/reverseDoc.php";
echo'                   
                            <h1 Style="text-align:center";>Reserving page For Patient</h1>

                            <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
                       
                        <div Style="text-align:center";>        
                         
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

for ($i = 0; $i < count($data); $i++) {
    $j = $i + 1;
    echo"
                        <tbody>
                                      <form action = '../../controllers/patient/reverseDoc.php' method ='post'>			

                                <tr> 

                                    <td>{$data[$i]['Day']}</td>
                                    <td>{$data[$i]['appoint']}</td>
                                    <td>{$data[$i]['name']}</td>                                   
                                 <input name='Mina' style='display:none'; value=$j> 
                                 <input name='Minaa' style='display:none'; value={$data[$i]['id']}>       

                           <td><input type ='submit' name='submit' value='Reserve'></td>
                                       
                                   
                                 </tr>
                               </form>  
                                 
                              ";
}
echo '
                        </body>
                        </table>';
echo '
                 <h1 Style="text-align:center";>Reserving Appoiment</h1>
                              
                         
                        <table border="3" class="table" Style="text-align:center"\>
			<thead>
				<tr>
					
					<th>Day</th>
					<th>Time</th>
                                        <th>Doctor Name</th>
                                           
                                        
				</tr>
			</thead>
                         ';
for ($i = 0; $i < count($data4); $i++) {

    echo"
                        <tbody>
                                 <tr> 

                                    <td>{$data4[$i]['Day']}</td>
                                    <td>{$data4[$i]['appoint']}</td>
                                    <td>{$data4[$i]['name']}</td>                                   
                         
                                 </tr>                                
                              ";
}
echo '
                        </body>
                        </table>';
?>