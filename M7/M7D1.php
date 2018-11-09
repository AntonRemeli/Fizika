<html>
<head>
<title>M7D1 </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>

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
<td><a href="M7CK.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7D2.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" title="előre" /> </a></td></tr></tbody></table>
<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a   href="M7D1.php" >D1. A nyomás fogalma	74  </a><a href="M7FE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2> </td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>../in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>../in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table>

<table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>  </td><td>
<br>
Amikor a testek kölcsönhatása érintkezés útján történik (billiárdgolyók ütközése, a padlón állunk) akkor az érintkező felületek NYOMÁST gyakorolnak egymásra. 

<?php 
 echo $Brutális_fizika_S01E04_A_nyomás;
?>
<br><br>

Minél kisebb az érintkező felület, annál nagyobb a nyomás (a tű hegye könnyedén átszúr mindent: óvatlanul egy kiálló szőgre lépünk, átszúrja a cipőnk talpát! ... százszor roszabb ha száz kiálló szögbe lépünk?)
<?php 
 echo $The_science_of_lying_down_on_a_bed_of_nails;
?>

<br><br>
A nyomás mértékegysége a Pascal: egy Pascal a nyomás ha 1N erő egy négyzetméter felületen oszlik meg. 
<?php 
 echo $a1_ProFizika_Nyomás.'<script type="text/javascript" src="'.$hF.'wz_tooltip.js"></script>';
?>
<br><br>

Például, állok a földön: súlyom 50kg (NEM! ennyi a tömegem), 500N súlyerővel nyomom a talajt. A talpam felülete egy négyzetdeciméter (egyszázad méter), tehát a talajra kifejtett nyomás:
<br><br>
P = F / A = 500 N / 0.01 m<sup>2</sup> = 50 000 N / m<sup>2</sup>  = 50 000 Pa = 50 kPa
<br><br>

HF: E:4, O:1-3 S:1,8

</td></tr></tbody></table><p><img style="width: 100%;" src="M7D1.jpeg" title="D1. A nyomás fogalma	74 "  alt="D1. A nyomás fogalma	74 " /></p>

<table style="width: 100%;"><tbody><tr>
<td><a href="M7CK.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7D2.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" /> </a></td>
</tr></tbody></table>
<?php 
 include "../../100a.php";
 include "../../100b.php";
include "../../100c.php";
?>
 
</body>
</html>
