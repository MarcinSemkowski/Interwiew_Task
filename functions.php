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
	$n = $mysql_row['NIP'];
	$r = $mysql_row['REGON'];
	$name = $mysql_row['NAZWA'];
	$vat = $mysql_row['VAT'];
     if($vat == 1){
     	$vat = "tak";
     }else{
     	$vat = "nie";
     }

	$street = $mysql_row['ULICA'];
	$numberHouse = $mysql_row['NUMER_DOMU'];
	$numberFlat = $mysql_row['NUMER_MIESZKANIA'];
 
 echo "<tr>

 <td>$id</td>
 <td>$n</td>
 <td>$r</td>
 <td>$name</td>
 <td>$vat</td>
 <td>$street</td>
 <td>$numberHouse</td>
 <td>$numberFlat</td>
 <td><a href='index.php?edit=$id'> Edit</a></td>
  <td><a href='index.php?delete=$id'> Delete</a></td>

 </tr>";


}

}


function showContractorByParagraph(){
global $con;


$query = "SELECT * FROM contractor";

$db_query = mysqli_query($con,$query);

while ($mysql_row = mysqli_fetch_array($db_query)) {
	$id = $mysql_row['ID'];
	$n = $mysql_row['NIP'];
	$r = $mysql_row['REGON'];
	$name = $mysql_row['NAZWA'];
	$vat = $mysql_row['VAT'];
     if($vat == 1){
     	$vat = "tak";
     }else{
     	$vat = "nie";
     }

	$street = $mysql_row['ULICA'];
	$numberHouse = $mysql_row['NUMER_DOMU'];
	$numberFlat = $mysql_row['NUMER_MIESZKANIA'];
 
 echo "

 <p>$id</p>
 <p>$n</p>
 <p>$r</p>
 <p>$name</p>
 <p>$vat</p>
 <p>$street</p>
 <p>$numberHouse</p>
 <p>$numberFlat</p>
 <p>UWAGI</p>

 ";


}

}






function addContractor($nip,$region,$nazwa,$vat,$street,$nrH,$nrF){
   
  global $con;

   $insertCon = "INSERT INTO contractor (NIP,REGON,NAZWA,VAT,ULICA,NUMER_DOMU,NUMER_MIESZKANIA) VALUES('$nip', '$region', '$nazwa', '$vat', '$street', '$nrH', '$nrF')";
   
   if($run_con = mysqli_query($con,$insertCon)){
   	 echo "<script>alert('You insert new Contractor !')</script>";
		echo "<script>window.open('index.php?con','_self')</script>";
   }else{
     echo "<script>alert('Error !')</script>";
		echo "<script>window.open('index.php?con','_self')</script>";
   }

} 





?>
