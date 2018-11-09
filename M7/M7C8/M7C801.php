<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M7C801</title>

</head>
<body>
<br>
<?php  
include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
$i = "'";
  
   if ($pap==1) echo '  <table style="width: 100%;"><tbody><tr> <td><a href="'. $hF.'M7/M7C8.php"><img  src="'. $hF.'@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td>  <td style="text-align: right;"><a href="'. $hF.'M7/M7C8/M7C801a.php"><img src="'. $hF.'@/02elore.jpg"  alt="előre"  title="előre" title="előre" /> </a></td></tr></tbody></table>'; 
   
   echo '<table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td> <h2> <a href="'. $hF.'M7/M7C8/M7C802.php?par=0&pap=1"';
if ($par==1) echo 'target="_blank"'; 
  echo ' >M7C801 A búgócsiga meséje </a><a href="'. $hF.'M7/M7C8.php" >  <img  src="'. $hF.'@/00fel.jpg" title="Vissza a tehetetlenségi nyomatékhoz" alt="Vissza a tehetetlenségi nyomatékhoz" border="0" /></a></h2> </td>  <td align="right">   <h2 style="text-align: right;"> <a href="'. $hF.'in/inFE.php">  <img  src="'. $hF.'@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="'. $hF.'in/index.php">Fizika egyszerűen</a> ';
 
  
   if ($pap==0) echo ' <a href="javascript:void(0)" onclick="open_url('.$i.''.$hF.'00.php'.$i.','.$i.'M7C801'.$i.');">  <img src="'.$hF.'@/05mesBe.png" alt="Mesét becsukom" title="Mesét becsukom" align="right" border="0" ></a>';
   
  echo '   </h2>  <br></td></tr></tbody></table>.';

include_once($pF . "@@/M79../h.php");

   if ($pap==1) echo '  <table style="width: 100%;"><tbody><tr> <td><a href="'. $hF.'M7/M7C8.php"><img  src="'. $hF.'@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td>  <td style="text-align: right;"><a href="'. $hF.'M7/M7C8/M7C801a.php"><img src="'. $hF.'@/02elore.jpg"  alt="előre"  title="előre" title="előre" /> </a></td></tr></tbody></table>'; 
  


 if ($pap==0) echo ' <a href="javascript:void(0)" onclick="open_url('.$i.''.$hF.'00.php'.$i.','.$i.'M7C801'.$i.');">  <img src="'.$hF.'@/05mesBe.png" alt="Mesét becsukom" title="Mesét becsukom" align="right" border="0" ></a> ';


 include ($pF ."100a.php");
 include ($pF ."100b.php");
include ($pF ."100c.php");

?>
 
</body>
</html>