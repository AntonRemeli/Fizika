<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>in.Bevezetés</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=UTF-8">
  <script type="text/javascript" src="<?php  echo $hF;?>ajax.js">
set_loading_message("Please wait while the page is opening....");
  </script>
</head>
<body>

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
 
<table style="width: 100%;">
  <tbody>
    <tr>
      <td><a href="<?php  echo $hF;?>in/inFE.php"><img
 style="border: 0px solid ;" title="előző téma"
 src="<?php  echo $hF;?>@/01vissza.jpg" alt="előző téma"></a></td>
      <td style="text-align: right;"><a
 href="<?php  echo $hF;?>00/00FE.php"><img style="border: 0px solid ;"
 title="következő téma"
 src="<?php  echo $hF;?>@/02elore.jpg"
 alt="következő téma"></a>&nbsp;</td>
    </tr>
  </tbody>
</table>


<?php   include_once($pF . "@@/Min.php");?>

<table style="width: 100%;">
  <tbody>
    <tr>
      <td><a href="<?php  echo $hF;?>in/inFE.php"><img
 style="border: 0px solid ;" title="előző téma"
 src="<?php  echo $hF;?>@/01vissza.jpg" alt="előző téma"></a></td>
      <td style="text-align: right;"><a
 href="<?php  echo $hF;?>00/00FE.php"><img style="border: 0px solid ;"
 title="következő téma"
 src="<?php  echo $hF;?>@/02elore.jpg"
 alt="következő téma"></a>&nbsp;</td>
    </tr>
  </tbody>
</table>

<?php 
// include_once $pF . "100a.php";
// include_once $pF . "100b.php";
// include_once $pF . "100c.php";
	 include_once $pF . "100abc.php";
?>
<a
href="Fizika_0dik.pdf"
target="blank">o</a>

</body>
</html>
