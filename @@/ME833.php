<html>
<head>
<title>E833 Ohm törvénye</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>

	
A síkságban a folyó vize lassan vánszorog, a hegyi folyó nagy morajjal rohan alá a völgybe. 
	<br><br>
A hegyi folyó nagy munkát képes elvégezni: munkavégző képessége <b> U = g * h </b>, ahol <b> g = 10 N/kg </b> a gravitációs térerő, <b> h </b> pedig a szintkülönbség, a magasság amelyikről aláfolyik a víz.
	<br><br>
	A folyó lejtése <b> L = h / s  = U / (g*s) </b>, ahol <b> s </b>	 a folyószakasz hossza, amelyiken a víz átfolyik.
	<br><br>
	Az átfolyó víz <b> I </b> mennyisége az <b> L </b> lejtés és  <b> K </b>folyamkeresztmetszet szorzata : <b> I = L * K =   U * K / (g*s) = U * v </b> , ahol <b> v = K / (g*s) </b> a folyó "víz-vezető-képessége", annak reciproka pedig az ellenállás <b> 1/v = R = g * s / K </b> .
	<br><br>
	
	Látjuk, hogy az ellenállás annál nagyobb, minél hoszabb a vezeték és annál kisebb minél nagyobb a keresztmetszet. Áramkör esetében <b> g </b> a fajlagos ellenállás.
	<br><br>
	Ohm törvénye: <b> R = U / I </b> .
	
	Mértékegysége: <b> 1 Ohm = 1V / 1A </b>   
	
	
 <?php   echo $ProFizika_Ohm_törvénye ; ?>

	
	
	
	
<script type="text/javascript" src="../wz_tooltip.js"></script>

 
</body>
</html>
