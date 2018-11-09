<html>
<head>
<title>M0.MOFIzika</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <script type="text/javascript" src="<?php  echo $hF;?>ajax.js">
set_loading_message("Please wait while the page is opening....");
  </script>

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
</head>
<body>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>O0/O0FE.php"><img src="<?php  echo $hF;?>@/01vissza.jpg"
title="vissza" alt="vissza" border="0" height="38" width="38"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>K0/K0FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="előre" title="előre" border="0" height="38"
width="38"></a></td>
</tr>
</tbody>
</table>


<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a href="<?php  echo $hF;?>M0/M0FE.php" >  M0.MOFIzika: a MOZAIK KIADÓ Kft  fizika tankönyvei 		</a>
</h2>
</td>
<td>
<h2 style="text-align: right;">
<a href="<?php  echo $hF;?>in/inFE.php"><img  src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>
 <a href="<?php  echo $hF;?>in/index.php">Fizika egyszerűen</a> </h2>
</td> </tr> </tbody> </table>
fejezetekre taglalva, a legfontosabb részek szövegkiemelővel kiemelve

<p></p>

<p></p>
<table style="width: 100%;">
<tbody>
<tr>
<td>
<h2><small><a href="<?php  echo $hF;?>M7/M7FE.php">M7. Mechanika, hetedikes fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>M8/M8FE.php">M8. Elektromos jelenségek, nyolcadikos fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>M9/M9FE.php">M9. Mechanika, kilencedikes fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>MA/MAFE.php">MA. Elektromos jelenségek, tizedikes fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>MB/MBFE.php">MB. Optika, tizenegyedikes fizika</a></small></h2>
<h2><small><a href="<?php  echo $hF;?>MC/MCFE.php">MC. Kozmológia, izenkettedikes fizika</a></small></h2>
</tr>
</tbody>
</table>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>O0/O0FE.php"><img src="<?php  echo $hF;?>@/01vissza.jpg"
alt="" border="0" height="38" width="38"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>K0/K0FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="" border="0" height="38"
width="38"></a></td>
</tr>
</tbody>
</table>

<?php 
 include_once $pF . "100a.php";
 include_once $pF . "100b.php";
include_once $pF . "100c.php";
?>

</body>
</html>


