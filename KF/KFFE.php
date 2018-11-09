
<!DOCTYPE html>
<html>
<head>
<!--title>KF00 - Fizika egyszerűen</title-->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
 <table style="width: 100%;"><tbody><tr>
<td> </td><td>
<?php 
include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
//echo "  pa: ".$pa;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
//echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
//echo "  par: ".$par;
$i = "'";
//echo "  pF: ".$pF;
//echo "  hF: ".$hF;
?>
<table style="width: 100%;"><tbody><tr>
<td><a href="<?php  echo $hF ?>K0/K0FE.php"><img  src="<?php  echo $hF  ?>@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td> 
<td style="text-align: right;"><a href="KMFE.php"><img src="<?php  echo $hF  ?>@/02elore.jpg" alt="előre"  title="előre" title="előre" /> </a></td></tr><tr> <td>
<h2><a   href="<?php  echo $hF ?>KF/KFFE.php" > SZERZŐ / FORRÁS / TÉMA:    </a><a href="<?php  echo $hF ?>00/00FE.php">  <img  src="<?php  echo $hF  ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>   </td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF ?>in/inFE.php">  <img  src="<?php  echo $hF  ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table>

<?php  
include "RTné.php";
include "RTnk.php";
include "KFF.php";?>

<table style="width: 100%;"><tbody><tr>
<td><a href="<?php  echo $hF ?>K0/K0FE.php"><img  src="<?php  echo $hF  ?>@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td> 
<td style="text-align: right;"><a href="KMFE.php"><img src="<?php  echo $hF  ?>@/02elore.jpg" alt="előre"  title="előre" title="előre" /> </a> </td> </tr> </tbody> </table>





</body>
</html>
