<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>Kapcsolat</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=UTF-8">
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
      <td><a href="<?php  echo $hF;?>in/inFE.php"><img
 style="border: 0px solid ;" title="előző téma"
 src="<?php  echo $hF;?>@/01vissza.jpg" alt="előző téma"></a></td>
      <td style="text-align: right;"><a
 href="<?php  echo $hF;?>K0/K0FE.php"><img style="border: 0px solid ;"
 title="következő téma"
 src="<?php  echo $hF;?>@/02elore.jpg"
 alt="következő téma"></a></td>
    </tr>
  </tbody>
</table>



<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a href="<?php  echo $hF;?>K0/K0FE.php">Kapcsolat <img style="border: 0px solid ;" title="Téma megnyitása lassú hálózatban" alt="Téma megnyitása lassú hálózatban" src="<?php  echo $hF;?>@/00fel.jpg" >		</a>
</h2>
</td>
<td>
<h2 style="text-align: right;">
<a href="../in/inFE.php"><img title="Bevezető megnyitása lassú hálózatban" src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>
 <a href="../in/index.php">Fizika egyszerűen</a> </h2>
</td> </tr> </tbody> </table>

<h2>00fizika (kukac) gmail (pont) com</h2>
<br>
<h2><a href="<?php  echo $hF;?>KF/KFFE.php">Források 
<img style="border: 0px solid; width: 25px; height: 25px;" src="<?php  echo $hF;?>@/04tudomany.jpeg" title="források megnyitása" alt="források megnyitása" />
</a></h2>
<h2><a href="<?php  echo $hF;?>KM/KMFE.php">Mesék 
<img
style="border: 0px solid ;" title="mesék megnyitása" alt="mesék megnyitása"
src="<?php  echo $hF;?>@/05mese.png" >
</a></h2>


<table style="width: 100%;">
  <tbody>
    <tr>
      <td><a href="../in/inFE.php"><img
 style="border: 0px solid ;" title="előző téma"
 src="<?php  echo $hF;?>@/01vissza.jpg" alt="előző téma"></a></td>
      <td style="text-align: right;"><a
 href="<?php  echo $hF;?>K0/K0FE.php"><img style="border: 0px solid ;"
 title="következő téma"
 src="<?php  echo $hF;?>@/02elore.jpg"
 alt="következő téma"></a></td>
    </tr>
  </tbody>
</table>

<?php   include "../100a.php";
 include "../100b.php";
include "../100c.php";
?>

</body>
</html>
