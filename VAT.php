<?php 

if(isset($_SESSION['VAT'])){
$vat = $_SESSION['VAT'];
}
?>

<table align="center" width="700"  border="1" id="table">

<th>Lp. </th>
<th>Opis: </th>
<th> MPK </th>
<th> Kwota Netto  </th> 
<th>Ilość :  </th>
    <th> VAT:   </th>
    <th> Kwota Brutto:    </th>
    <th>  Wartość Netto     </th>
    <th> Wartość Brutto     </th>
    
<tr align="center"  id="r1">
    <td>1</td>
    <td>Produkt 1</td>
    <td>0</td>
    <td id="c1">10.00</td>
    <td>1</td>
    <td><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td>200</td>
    <td>200</td>
    <td>200</td>
    
    </tr>
    

 
<tr align="center"  id="r2">
    <td>1</td>
    <td>Produkt 1</td>
    <td>0</td>
    <td id="c2">10.00</td>
    <td>1</td>
    <td><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td>200</td>
    <td>200</td>
    <td>200</td>
    
    </tr>
    
    
     
<tr align="center"  id="r3">
    <td>1</td>
    <td>Produkt 1</td>
    <td>0</td>
    <td id="c3">7000</td>
    <td>1</td>
    <td><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td>200</td>
    <td>200</td>
    <td>200</td>
    
    </tr>
    
    
     
<tr align="center"  id="r4">
    <td>1</td>
    <td>Produkt 1</td>
    <td>0</td>
    <td id="c4">5000</td>
    <td>1</td>
    <td><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td>200</td>
    <td>200</td>
    <td>200</td>
    
    </tr>
    
    
     
<tr align="center"  id="r5">
    <td>1</td>
    <td>Produkt 1</td>
    <td>0</td>
    <td id="c5">10.00</td>
    <td>1</td>
    <td><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td>200</td>
    <td>200</td>
    <td>200</td>
    
    </tr>
    
    
    
    
</table>

<input type="button" onclick="net()" value=" Powyżej 1000,00 zł Netto" />

