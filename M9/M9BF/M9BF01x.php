<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M9BF01</title>

</head>
<body>
<br>
<?php  //include "../../../h.php";
//echo ("aaaaa".$pF."xxxxxx");
 ?>
 <?php  include "../../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
$i = "'";
 ?>
 
 <?php  // if ($par==0) echo 'target="_blanX"'; ?>
 

 

 
 
 <table style="width: 100%;"><tbody><tr>
<td><a href="<?php  echo $hF;?>M9BF.php"><img  src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td>  
<td style="text-align: right;"><a href="<?php  echo $hF;?>M9BF01a.php"><img src="<?php  echo $hF;?>@/02elore.jpg"  alt="előre"  title="előre" title="előre" /> </a></td></tr></tbody></table>
 
<table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>
<h2> <a href="<?php  echo $hF;?>M9BF02.php?par=0&pap=1"
 <?php  if ($par==1) echo 'target="_blank"'; ?>
 >M9BF01 A búgócsiga meséje </a><a href="<?php  echo $hF;?>M9BF.php" >  <img  src="<?php  echo $hF;?>@/00fel.jpg" title="Vissza a tehetetlenségi nyomatékhoz" alt="Vissza a tehetetlenségi nyomatékhoz" border="0" /></a></h2> </td>
 <td align="right">
 
  <h2 style="text-align: right;"> <a href="<?php  echo $hF;?>in/inFE.php">  <img  src="<?php  echo $hF;?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF;?>in/index.php">Fizika egyszerűen</a> 

 <?php     if ($pap==0) echo ' <a href="javascript:void(0)" onclick="open_url('.$i.''.$hF.'00.php'.$i.','.$i.'M9BF01'.$i.');">  <img src="'.$hF.'@/05mesBe.png" alt="Mesét becsukom" title="Mesét becsukom" align="right" border="0" ></a>';
  ?> 

</h2>  <br></td></tr></tbody></table>


<?php 
// $k = $hF."@@/M099.php";

// echo  $k;

// include "../../@@/M099.php";

//include "../../../Fizika/@@/M099.php";

?>


<?php  
//   $path = $_SERVER['DOCUMENT_ROOT'];
   
//   $path2 = $path . "/Fizika/@@/M099.php";
   
//   include_once($path2);

include_once($pF . "@@/M99../h.php");
?>

<table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>
 </td>
 <td align="right">
 
  <?php     if ($pap==0) echo ' <a href="javascript:void(0)" onclick="open_url('.$i.''.$hF.'00.php'.$i.','.$i.'M9BF01'.$i.');">  <img src="'.$hF.'@/05mesBe.png" alt="Mesét becsukom" title="Mesét becsukom" align="right" border="0" ></a>';
  ?> 
 
<br></td></tr></tbody></table>


<?php   include ($pF ."100a.php");
 include ($pF ."100b.php");
include ($pF ."100c.php");

//echo ($pF."AAxxxxx") ;
?>
 
</body>
</html>