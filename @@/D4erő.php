<html>
<head>
<title>M47C3 Az erő fogalma</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php  
include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "...".$pF;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>

	 <script type="text/javascript" src="<?php  echo $hF;?>ajax.js">set_loading_message("Please wait while the page is opening");</script>

A tömeg a test tehetetlenségének mértéke. A tömeg jele m, mértékegysége a kilogramm (kg).
<br>
Egy newton (N) nagyságú az az erőhatás, amely 1 kg tömegű test sebességét 1 másodperc alatt 1 m/s -cel változtatja meg (F=ma). Ez az erőhatás, azaz Newton II. törvénye.

<?php 
 echo $Newtons_2nd_Law_of_Motion;
 echo $Fizika_9_évfolyam_Newton_II_törvénye;
?>

<script type="text/javascript" src="<?php echo $hF ?>wz_tooltip.js"></script>
</body>
</html>
