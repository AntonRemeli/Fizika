	 
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
$E1401_gézpohár =' <a
target="blank" href="https://drive.google.com/open?id=0B2JiTDjox8F6azdjdXRJQVhrMFk" ><img
style="border: 0px solid ; width: 30px; height: 30px;" src="'.$hF.'@/08film.jpg"
alt="1401 gézpohár" title="1401 gézpohár"></a>';

 echo $E1401_gézpohár;
 
 $A_légnyomás_bemutatása_egy_pohár_vízzel=' <a
href="http://berzelab.berze.hu/kiserlet-a-legnyomas-bemutatasa-egy-pohar-vizzel/" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="A légnyomás bemutatása egy pohár vízzel" title="A légnyomás bemutatása egy pohár vízzel "
src="'.$hF.'@/08film.jpg"></a> ';

 echo $A_légnyomás_bemutatása_egy_pohár_vízzel;
?>

xxxxxxxxxxxxx