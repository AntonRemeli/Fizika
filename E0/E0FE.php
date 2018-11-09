<html>
<head>
<title>E0.EFIzika</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <script type="text/javascript" src="../ajax.js">
set_loading_message("Please wait while the page is opening....");
  </script>

<?php  include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "...".$pF;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
</head>
<body>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF; ?>00/00FE.php"><img src="<?php  echo $hF; ?>@/01vissza.jpg"
alt="" border="0" ></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF; ?>O0/O0FE.php"><img
src="<?php  echo $hF; ?>@/02elore.jpg" alt="" border="0" height="38"
width="38"></a>&nbsp;</td>
</tr>
</tbody>
</table>


<table style="width: 100%;"> <tbody><tr><td><h2><a href="E0FE.php" >  E0.EFIzika: a Nemzeti Tankönyvkiadó fizika tankönyvei (OFI kiadásában) </a></h2></td>
<td><h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table>

B (emelt) tanmenet, fejezetekre taglalva, a legfontosabb részek szövegkiemelővel kiemelve
<p>&nbsp;</p>

<h2><small><a href="<?php  echo $hF; ?>E7/E7FE.php">E7. Hetedikes fizika: mechanika, kozmológia </a></small>	
<h2><small><a href="<?php  echo $hF; ?>E8/E8FE.php">E8. Nyolcadikos fizika: hőtan, elektromos jelenségek, optika </a></small>
<h2><small><a href="<?php  echo $hF; ?>E9/E9FE.php">E9. Kilencedikes fizika: mechanika</a></small>
<h2><small><a href="<?php  echo $hF; ?>EA/EAFE.php">EA. Tizedikes fizika: hőtan, elektromos jelenségek </a></small>
<h2><small><a href="<?php  echo $hF; ?>EB/EBFE.php">EB. Tizenegyedikes fizika: optika, kozmológia</a></small></h2>
<h2><small><a href="<?php  echo $hF; ?>EC/ECFE.php">EC. Tizenkettedikes fizika fakultáció: érettségi előkészítő </a></small></h2>
<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF; ?>00/00FE.php"><img src="<?php  echo $hF; ?>@/01vissza.jpg"
alt="" border="0" ></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF; ?>O0/O0FE.php"><img
src="<?php  echo $hF; ?>@/02elore.jpg" alt="" border="0" height="38"
width="38"></a></td>
</tr>
</tbody>
</table>

<?php 
include_once $pF . "100a.php";
include_once $pF . "100b.php";
include "../100c.php";
?>

</body>
</html>


