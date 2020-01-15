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

<p>NIP : $n</p>
<p>REGON: $r  </p>
<p>NAZWA: $name </p>
<p>DATA POWSTANIA:  </p>
<p>ULICA: $street </p>
<p>NUMER DOMU: $numberHouse </p>
<p>NUMER MIESZKANIA: $numberFlat</p>
<p>UWAGI: </p>

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

function showUpdateContractor($id){
    global $con;
    $updateID = $id;
    $showUpdateQuery = "SELECT * FROM contractor WHERE ID = '".$id."'";
    
    $query = mysqli_query($con,$showUpdateQuery);
   
    $mysql_row = mysqli_fetch_assoc($query);
    
    $id = $mysql_row['ID'];
	$n = $mysql_row['NIP'];
	$r = $mysql_row['REGON'];
	$name = $mysql_row['NAZWA'];
    

	$street = $mysql_row['ULICA'];
	$numberHouse = $mysql_row['NUMER_DOMU'];
	$numberFlat = $mysql_row['NUMER_MIESZKANIA'];
 
    
echo "<form  action='index.php' method='post' >
NIP :	
<input type='text' name='nip' value='".$n."' /> <br>
 REGON :
    
    <input type='text' name='r' value='".$r."' />
     <br/>
    NAZWA :
<input type='text' name='n' value='".$name."' />
    <br/>
     CZY PŁATNIK VAT?
<input type='checkbox' name='vat'  />
    <br/>
    ULICA:
    <input type='text' name='st' value='".$street."' />
    
    <br/>
    NUMER DOMU :
    <input type='text' name='nrH' value='".$numberHouse."' />
    <br/>
    NUMER MIESZKANIA :
    <input type='text' name='nr_f' value='".$numberFlat."' />

    <input type='hidden' name='updateId' value='".$id."' />
    <br/>
    
<input type='submit' value='Dodaj' name='update' />


</form>";



}


function updateContractor($id,$nip,$region,$nazwa,$vat,$street,$nrH,$nrF){
global $con;
 echo     $updateQuery = "UPDATE contractor SET NIP='$nip' ,REGON='$region' ,NAZWA='$nazwa' ,VAT='$vat' ,ULICA='$street' ,NUMER_DOMU='$nrH' ,NUMER_MIESZKANIA='$nrF' WHERE ID = '$id' ";

  if($run_con = mysqli_query($con,$updateQuery)){
     echo "<script>alert('You update  Contractor !')</script>";
        echo "<script>window.open('index.php?con','_self')</script>";
   }else{
     echo "".mysqli_error($con);
       
   }


}


function deleteContractor($id){
 global $con;
  $deleteQuery = "DELETE FROM contractor WHERE ID = '$id'";    

   if($run_con = mysqli_query($con,$deleteQuery)){
     echo "<script>alert('You delete  Contractor !')</script>";
        echo "<script>window.open('index.php?con','_self')</script>";
   }else{
     echo "".mysqli_error($con);
       
   }


}



?>
