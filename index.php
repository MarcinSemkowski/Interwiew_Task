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
    <li><a href="">Różne kontrolki HTML </a></li>
         <li><a href="index.php?emp">Tabela Pracowników  </a></li>
         <li><a href="index.php?vat">Tabela Faktur VAT  </a></li>
         <li><a href="index.php?BD">Tabela Delegacji BD  </a></li>
         <li>  <a href="">Dane Kontrahentów   </a></li>
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
        
        ?>
    </div>
    
    <div style="clear:both"></div>
    <script src="script.js"></script>
    </body>
</html>