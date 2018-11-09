<html>
<head>
<title>M7E2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
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
<body>
<table style="width: 100%;"><tbody><tr>
<td><a href="M7E1.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7E3.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" title="előre" /> </a></td></tr></tbody></table>

<table style="width: 100%;"> <tbody> <tr> <td><h2><a   href="M7E2.php" >E2. A munkavégzés és a munka	99</a><a href="M7FE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2></td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table><table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>  </td><td>
<br><br>
Száz rugó összenyomása kifáraszt, tíz malomkerék ellökése megizzaszt, száguldó kocsi befékezése átforrósítja a fékeket.
<br><br>
Munka befektetésével megnöveltük a rugó rugalmas energiáját, a malomkerék mozgási energiáját, a fékek hőenergiáját. <br>
A munka jele <b>W</b> (angol "Work"), <br>
képlete <b>W = F * s  (erő szorozva az erő irányába történő elmozdulással),<br>
mértékenysége a Joule (<b>1J = 1N * 1m</b>)
<br><br>
HF: S:1,4
<br><br>
</td></tr></tbody></table><p><img style="width: 100%;" src="M7E2.jpeg" title="E2. A munkavégzés és a munka	99 "  alt="E2. A munkavégzés és a munka	99" /></p>

<table style="width: 100%;"><tbody><tr>
<td><a href="M7E1.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7E3.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" /> </a></td>
</tr></tbody></table>
<?php  include_once($pF . "100abc.php");?>
 
</body>
</html>
