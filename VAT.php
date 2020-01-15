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
    <td id="qty1">1</td>
    <td id="vat1"><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td id="kb1"></td>
    <td id="wn1"></td>
    <td id="wb1"></td>
    
    </tr>
    

 
<tr align="center"  id="r2">
    <td>1</td>
    <td>Produkt 2</td>
    <td>0</td>
    <td id="c2">10.00</td>
    <td id="qty2">10</td>
    <td id="vat2"><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td id="kb2"></td>
    <td  id="wn2"></td>
    <td id="wb2"></td>
    
    </tr>
    
    
     
<tr align="center"  id="r3">
    <td>1</td>
    <td>Produkt 3</td>
    <td>0</td>
    <td id="c3">7000</td>
    <td id="qty3">2</td>
    <td id="vat3"><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td id="kb3"></td>
    <td  id="wn3"></td>
    <td id="wb3"></td>
    
    </tr>
    
    
     
<tr align="center"  id="r4">
    <td>1</td>
    <td>Produkt 4</td>
    <td>0</td>
    <td id="c4">5000</td>
    <td id="qty4">7</td>
    <td id="vat4"><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td id="kb4"></td>
    <td  id="wn4"></td>
    <td id="wb4"></td>
    
    </tr>
    
    
     
<tr align="center"  id="r5">
    <td>1</td>
    <td>Produkt 5</td>
    <td>0</td>
    <td id="c5">10.00</td>
    <td id="qty5">5</td>
    <td id="vat5" ><?php echo isset($vat) ? $vat : "0%" ?></td>
    <td id="kb5"></td>
    <td  id="wn5"></td>
    <td id="wb5"></td>
    
    </tr>
    
    
    
    
</table>

<input type="button" onclick="net()" value=" Powyżej 1000,00 zł Netto" />
<input type="button" onclick="count()" value=" Oblicz" />
