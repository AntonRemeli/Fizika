<html>
<head>
<title>M7D3 </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>


<p id="demo"></p>

<script>
// document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script> 



 <?php  
include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
<table style="width: 100%;"><tbody><tr>
<td><a href="M7D2.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7D4.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" title="előre" /> </a></td></tr></tbody></table>

<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a   href="M7D3.php" >D3. A gázok nyomása	81  </a><a href="M7FE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2> </td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table><table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>  </td><td>

<br><br>

A levegőnek is van súlya, amit egyszerűen egy labdával meg is mérhetünk: 
<?php 
 echo $ProFizika_A_légnyomás_1_rész;
?> 
<br><br>

A fölöttünk tornyosodó 20+200 km magas levegőoszlop súlya tíz méter magas vízoszop súlyával egyenlő (vagy 76 cm hignyoszlop, mert egy liter higany 13.6-szor nehezebb egy liter víztől) .
<br><br>
 Mivel tíz méter magas vízoszlop nyomása 10*10000N (egy köbméter víz tömege 1000kg, így súlya 10000N), ezért mondjuk, hogy a légnyomás 100000 N/m<sup>2</sup> = 100000 Pa = 100 kPa.

<?php 
 echo $A_légnyomás_bemutatása_egy_pohár_vízzel;
 echo $E1401_gézpohár;
 echo $Hidrosztatikai_nyomás_szemléltetése;
 echo $E1261_léggömb_üvegbúra_alatt;
 echo $E1421_léggömblombikban;
?>


<br><br>


Érdekes tudnivaló: amikor szikrázva süt a nap, a levegő puskaporszáraz és magas a légnyomás (100 kPa, anticiklon). Majd fülledt, párás lesz a levegő, a légnyomás nagyot zuhan (90 kPa, ciklon), és viharos szél kíséretében végigsöpör a zivatar.
<br><br>

HF: E-2,5, G-1,5,8
<br>

</td></tr></tbody></table><p><img style="width: 100%;" src="M7D3.jpeg" title="D3. A gázok nyomása	81  "  alt="D3. A gázok nyomása	81  " /></p>

<table style="width: 100%;"><tbody><tr>
<td><a href="M7D2.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7D4.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" /> </a></td>
</tr></tbody></table>
<?php 
 include "../100a.php";
 include "../100b.php";
include "../100c.php";
?>
 
</body>
</html>
