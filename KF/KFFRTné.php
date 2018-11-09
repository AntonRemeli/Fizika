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
//$i = "'";
//echo "  pF: ".$pF;
//echo "  hF: ".$hF;
//$i = "'";
//$ii = '"';
// echo "  iiiiii: ".$i;
// echo "  iiiiii2: ".$ii;

?>
 <?php 	
	 
//ProFizika Oktatófilmek
$Ytb="https://www.youtube.com/watch?v=";
$Yti="https://i.ytimg.com/vi/";
$Ytj="/hqdefault.jpg?>";

$RTa0="Az anyag belső szerkezete: <br>";
$RTa1="l4-NgIZyPbg";   		$RTa1t="Miből áll a világ? "; 
$RTa2="epZ4CbrhCdg";		$RTa2t="Erőhatás az anyag részecskéi között";
$RTa3="hcWVb-MFxp8";		$RTa3t="Különböző anyagok, különböző tulajdonságok";




 echo $RTa0;


 
$RTa1v =' <a
target="blank" href="'.$Ytb.$RTa1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTa1t.'" title="'.$RTa1t.'" src="'.$Yti.$RTa1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTa1.$Ytj.'.'.$i.')"></a>';
 echo $RTa1v;
?>

<?php 
$Nikola_Tesla_Legendája =' <a
target="blank" href="https://www.youtube.com/watch?v=rzIYRxWbm1g" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="Nikola Tesla Legendája" title="Nikola Tesla Legendája" src="https://i.ytimg.com/vi/rzIYRxWbm1g/hqdefault.jpg?">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=https://i.ytimg.com/vi/rzIYRxWbm1g/hqdefault.jpg?>'.$i.')"></a>';
 echo $Nikola_Tesla_Legendája;
?>


