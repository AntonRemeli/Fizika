<html>
<head>
<title>00.Témakörök</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <script type="text/javascript" src="<?php  echo $hF;?>ajax.js">
set_loading_message("Please wait while the page is opening....");
  </script>
</head>
<body>

<?php  include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "pF: ".$pF;
// echo "  hF: ".$hF;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 
 ?>
 

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>in/inFE.php"><img src="<?php  echo $hF;?>@/01vissza.jpg"
alt="" border="0" height="38" width="38"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>E0/E0FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="" border="0" height="38"
width="38"></a>&nbsp;</td>
</tr>

</tbody>
</table>



<table style="width: 100%;">
<tbody>
<tr>
<td>
<h2><a href="<?php  echo $hF;?>00/00FE.php" >  00.Témakörök </a></h2>
</td>
<td>
<h2 style="text-align: right;"><a href="<?php  echo $hF;?>in/inFE.php"><img  src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a><a  href="<?php  echo $hF;?>in/index.php" >Fizika egyszerűen</a>&nbsp;</h2>
</td>
</tr>
</tbody>
</table>


<h2><small><a href="<?php  echo $hF;?>01/01FE.php">01. Mi a fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>02/02FE.php">02. Anyagszerkezet</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>03/03FE.php">03. Kölcsönhatások</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>04/04FE.php">04. Sokaságok tánca</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>05/05FE.php">05. Csillagfényben</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>06/06FE.php">06. Lázadás</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>07/07FE.php">07. Elszigetelődve</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>08/08FE.php">08. Elfehéredve</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>09/09FE.php">09. Csodára várva</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>0A/0AFE.php">09. Őrület</a></small></h2>
<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>in/inFE.php"><img src="<?php  echo $hF;?>@/01vissza.jpg"
alt="" border="0" height="38" width="38"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>E0/E0FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="" border="0" height="38"
width="38"></a></td>
</tr>
</tbody>
</table>

<?php   include_once $pF . "100a.php";
 include_once $pF . "100b.php";
include_once $pF . "100c.php";
?>

</body>
</html>


