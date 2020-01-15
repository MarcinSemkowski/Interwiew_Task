<?php 
session_start();
include("functions.php");


if(isset($_POST['addVat'])){
    $vat = $_POST['VAT'];
    $_SESSION['VAT'] = $vat;
}
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>

     <meta charset="utf-8"/>
    <title>Zadanie zdalne e-MSI </title>
    <meta name="description" content="JS Memory Game inspired by Gewnt">
    
    <meta http-equiv="X-Ua-Compatibile" content="IE=edge.chrome=1">
    <link href="style.css" type="text/css" rel="stylesheet" />
    </head>

<body>
    
    <div id="Lewy">
     <ol type="a">
    <li><a href="index.php?H">Różne kontrolki HTML </a></li>
         <li><a href="index.php?emp">Tabela Pracowników  </a></li>
         <li><a href="index.php?vat">Tabela Faktur VAT  </a></li>
         <li><a href="index.php?BD">Tabela Delegacji BD  </a></li>
         <li>  <a href="index.php?con">Dane Kontrahentów   </a></li>
 </ol>     
    
    </div>
    <div id="Prawy">
     <?php
         if(isset($_GET['emp'])){
            include("employees.php"); 
         }
        if(isset($_GET['vat'])){
            include("VAT.php"); 
         }
         if(isset($_GET['BD'])){
            include("BD.php"); 
         }
        
        if(isset($_GET['con'])){
            include("contractor.php"); 
         }
      if (isset($_GET['add'])) {
       include("add_contractor.php");
      }
         if (isset($_GET['H'])) {
       include("HTML.php");
      }
        if (isset($_GET['edit'])) {
         
           $updateId = $_GET['edit'];
            showUpdateContractor($updateId);
      }else if(isset($_GET['add'])){
            include("add_contrator.php");
        }



         // adding contractor
          if(isset($_POST['add'])){
          $nip = $_POST['nip'];
          $region = $_POST['r'];
          $nazwa = $_POST['n'];
          if(isset($_POST['vat'])){
            $vat = true;
          }else{
            $vat = false;
          }
          
          $street = $_POST['st'];
          $houseNr = $_POST['nrH'];
          $nrFlat = $_POST['nr_f'];

           
             addContractor($nip,$region,$nazwa,$vat,$street,$houseNr,$nrFlat);


          }
        
        
        //update contractor 
        if(isset($_POST['update'])){
            $nip = $_POST['nip'];
          $region = $_POST['r'];
          $nazwa = $_POST['n'];
          if(isset($_POST['vat'])){
            $vat = true;
          }else{
            $vat = false;
          }
          
          $street = $_POST['st'];
          $houseNr = $_POST['nrH'];
          $nrFlat = $_POST['nr_f'];
            $id = $_POST['updateId'];
        
            updateContractor($id,$nip,$region,$nazwa,$vat,$street,$houseNr,$nrFlat);
        
        }
        

        
        ?>
    </div>
    
    <div style="clear:both"></div>
    
    
     <script src="jquery-3.2.1.min.js"></script>
           <script src="script.js"></script> 
    
    </body>
</html>