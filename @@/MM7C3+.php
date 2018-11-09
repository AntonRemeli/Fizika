<!DOCTYPE html>
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





 <?php 
 $Hobbielektronika_Az_Ohm_törvény =' <a
target="blank" href="https://www.youtube.com/watch?v=2Bps-OXgMEc"><img
style="border: 0px solid ; width: 45px; height: 35px;"
src="https://i.ytimg.com/vi/2Bps-OXgMEc/hqdefault.jpg" title="Elektromos ellenállás, Ohm törvénye" alt="Elektromos ellenállás, Ohm törvénye">

<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=https://i.ytimg.com/vi/2Bps-OXgMEc/hqdefault.jpg?>'.$i.')">
</a>';

  echo $Hobbielektronika_Az_Ohm_törvény;
?>


 <?php 

$ProFizika_Ohm_törvénye = ' <a
target="blank" href="https://www.youtube.com/watch?v=Pen2YEQg45E"><img
style="border: 0px solid ; width: 45px; height: 35px;"
src="https://i.ytimg.com/vi/Pen2YEQg45E/hqdefault.jpg" title="6 ProFizika Ohm törvénye" alt="6 ProFizika Ohm törvénye">

<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=https://i.ytimg.com/vi/Pen2YEQg45E/hqdefault.jpg?>'.$i.')">
</a>';

  echo $ProFizika_Ohm_törvénye ;
?>

 <?php 
 $Elektromos_ellenállás_Ohm_törvénye =' <a
target="blank" href="https://www.youtube.com/watch?v=uIDGFVvc6RI"><img
style="border: 0px solid ; width: 45px; height: 35px;"
src="https://i.ytimg.com/vi/uIDGFVvc6RI/hqdefault.jpg" title="Elektromos ellenállás, Ohm törvénye" alt="Elektromos ellenállás, Ohm törvénye">

<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=https://i.ytimg.com/vi/uIDGFVvc6RI/hqdefault.jpg?>'.$i.')">
</a>';

  echo $Elektromos_ellenállás_Ohm_törvénye;
?>





<?php 
 //echo $Newtons_2nd_Law_of_Motion;
 echo $Fizika_9_évfolyam_Newton_II_törvénye;
?>



A tömeg a test tehetetlenségének mértéke. A tömeg jele m, mértékegysége a kilogramm (kg).
<br>
Egy newton (N) nagyságú az az erőhatás, amely 1 kg tömegű test sebességét 1 másodperc alatt 1 m/s -cel változtatja meg (F=ma). Ez az erőhatás, azaz Newton II. törvénye.


<?php 
$The_Science_of_Thinking =' <a
target="blank" href="https://www.youtube.com/watch?v=UBVV8pch1dM" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
src="https://i.ytimg.com/vi/UBVV8pch1dM/hqdefault.jpg?"
alt="The Science of Thinking " title="The Science of Thinking   ">

<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src=https://i.ytimg.com/vi/UBVV8pch1dM/hqdefault.jpg?>'.$i.')">
</a>';

 echo $The_Science_of_Thinking.'ss';
?>

<script type="text/javascript" src="<?php echo $hF ?>wz_tooltip.js"></script>



</body>
</html>
