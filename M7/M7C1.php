<html>
<head>
<title>M7C1</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php  
 include "../../h.php";
// $_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>
<table style="width: 100%;"><tbody><tr>
<td><a href="M7BK.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7C2.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" title="előre" /> </a></td></tr></tbody></table>

<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a   href="" >C1. A tehetetlenség törvénye. A tömeg	44    </a><a href="M7FE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>  </td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table><table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>  </td><td>

<?php  include_once($pF . "@@/D1tehetetlenség.php");?>
<br><br>
<?php  include_once($pF . "@@/D2tehetetlenség+.php");?>
<br><br>

 
<br><br>

</td></tr></tbody></table><p><img style="width: 100%;" src="M7C1.jpeg" title="C1. A tehetetlenség törvénye. A tömeg	44 "  alt="C1. A tehetetlenség törvénye. A tömeg	44" /></p>

<table style="width: 100%;"><tbody><tr>
<td><a href="M7BK.php"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M7C2.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" /> </a></td>
</tr></tbody></table>

 <?php  // include_once($pF . "100abc.php");?>
</body>
</html>
