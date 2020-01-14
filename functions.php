<?php 
$con = mysqli_connect("localhost","root","","InterQ");




function getAllBD(){

global $con;


$query = "SELECT * FROM BD";

$db_query = mysqli_query($con,$query);

while ($mysql_row = mysqli_fetch_array($db_query)) {
	$id = $mysql_row['BD_id'];
	$name = $mysql_row['BD_name_username'];
	$dateFrom = $mysql_row['BD_Date_From'];
	$dateTo = $mysql_row['BD_Date_To'];
	$placeDep = $mysql_row['BD_Place_Dep'];
	$placeArival = $mysql_row['BD_Place_Arival'];
 
 echo "<tr>

 <td>$id</td>
 <td>$name</td>
 <td>$dateFrom</td>
 <td>$dateTo</td>
 <td>$placeDep</td>
 <td>$placeArival</td>


 </tr>";


}



}




function showContractor(){
global $con;


$query = "SELECT * FROM contractor";

$db_query = mysqli_query($con,$query);

while ($mysql_row = mysqli_fetch_array($db_query)) {
	$id = $mysql_row['ID'];
	$r = $mysql_row['REGON'];
	$name = $mysql_row['NAZWA'];
	$vat = $mysql_row['VAT'];
	$street = $mysql_row['ULICA'];
	$numberHouse = $mysql_row['NUMER_DOMU'];
	$numberFlat = $mysql_row['NUMER_MIESZKANIA'];
 
 echo "<tr>

 <td>$id</td>
 <td>$name</td>
 <td>$vat</td>
 <td>$street</td>
 <td>$numberHouse</td>
 <td>$numberFlat</td>


 </tr>";


}

} 





?>
