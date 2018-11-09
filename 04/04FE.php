<html>
<head>
<title>04FE</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
 
 
 <script type="text/javascript" src="<?php  echo $hF;?>ajax.js">set_loading_message("Please wait while the page is opening");</script>

 
 <script >

$hF04='<?php  echo $hF;?>04/04FE';
window.onload = function () {
    document.getElementById("m04FE01").onclick = function () {
        open_url($hF04+'01.php?par=1','04FE01');
	}
    document.getElementById("m04FE02").onclick = function () {
        open_url($hF04+'02.php?par=1','04FE02');
	}
    document.getElementById("m04FE03").onclick = function () {
        open_url($hF04+'03.php?par=1','04FE03');
    }
    document.getElementById("m04FE04").onclick = function () {
        open_url($hF04+'04.php?par=1','04FE04');
    }
    document.getElementById("m04FE05").onclick = function () {
        open_url($hF04+'05.php?par=1','04FE05');
    }
}
</script>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>03/03FE.php"><img style="border: 0px solid; width: 32px; height: 32px;" title="vissza" src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" /></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>05/05FE.php"><img style="border: 0px solid; width: 32px; height: 32px;" src="<?php  echo $hF;?>@/02elore.jpg" alt="előre" /></a></td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td>
<h2><a href="04FE.php">04.Sokaságok tánca</a><a href="<?php  echo $hF;?>00/00FE.php">  <img  src="<?php  echo $hF;?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>
</td>
<td>
<h2 style="text-align: right;"><a href="<?php  echo $hF;?>in/inFE.php"><img  src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a><a href="<?php  echo $hF;?>in/index.php">Fizika egyszerűen </a></h2>
</td>
</tr>
</tbody>
</table>
<p>A világot egyedek alkotják. Az anyagszerkezet és a kölcsönhatások (az anyag és az erő) az egyedekről szól. Van azonban egy másik nagyon fontos dolog a világunkban: az <big><b>egyedek sokasága</b></big>. A szinte végtelenül sok, a szinte végtelenül kevés, a szinte végtelenül nagy és a szinte végtelenül kicsi. <span id="m04FE01"><img style="border: 0px solid;" title="A nagy számok világa" src="<?php  echo $hF;?>@/05mese.png" alt="A nagy számok világa" /></b></p>
<div id="04FE01"> </div>
<!-- <div id="04FE01"></div> -->
<p><br /> Tapasztalati tény, hogy a sokasággal együtt jár a rendetlenség, a világban a rendetlenség csak nagyobb lesz, idegen megfogalmazással: <big><b>az entrópia csak nagyobb lesz</b></big>. <span id="m04FE02"><img style="border: 0px solid;" title="Gondolatkísérlet" src="<?php  echo $hF;?>@/05mese.png" alt="Gondolatkísérlet" /></b> <a href="https://hu.wikipedia.org/wiki/Entr%F3pia" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Entrópia" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Entrópia" /></a></p>
<div id="04FE02"> </div>
<!-- <div id="04FE02"></div> -->
<p><big><b>A hőmérséklet</b></big> az anyagot felépítő részecskék átlagos mozgási energiájával 
<a href="https://hu.wikipedia.org/wiki/Energia" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Energia" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Energia" /></a>
kapcsolatos. A hőmérséklet az anyagok egyik fizikai jellemzője, állapothatározó. E jellemzőt az ember elsősorban tapintás útján, a hőérzettel észleli, másodsorban hőmérő segítségével. <span id="m04FE03"><img style="border: 0px solid;" title="Vajon mi is a 'hőmérséklet'?" src="<?php  echo $hF;?>@/05mese.png" alt="Vajon mi is a 'hőmérséklet'?" /></b> 
<a href="https://hu.wikipedia.org/wiki/Hőmérséklet" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőmérséklet" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hőmérséklet" /></a>
<a href="http://fizipedia.bme.hu/index.php/6._Hideg-meleg" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hideg-meleg" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hideg-meleg" /></a></p>
<div id="04FE03"> </div>
<!-- <div id="04FE03"></div> -->
<p><br /> <big><b>A hőterjedés</b></big> <span id="m04FE04"><img style="border: 0px solid;" title="Vajon mi is a 'hőterjedés'?" src="<?php  echo $hF;?>@/05mese.png" alt="Vajon mi is a 'hőterjedés'?" /></b> <a href="http://tudasbazis.sulinet.hu/hu/termeszettudomanyok/fizika/fizika-10-evfolyam/hoterjedes/a-hoaramlas" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőterjedés SuliNet" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hőterjedés SuliNet" /></a> <a href="http://www.tankonyvtar.hu/en/tartalom/tamop412A/2010-0017_42_muszaki_hotan/ch04.html" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőterjedés TanKönyvtár" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hőterjedés TanKönyvtár" /></a> <a href="http://tudasbazis.sulinet.hu/hu/termeszettudomanyok/fizika/fizika-10-evfolyam/a-hoenergia-es-a-fajho/hokozles-energiaatadas" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőközlés-energiaátadás SuliNet" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hőközlés-energiaátadás SuliNet" /></a> a következő három elemi folyamat útján történik:</p>
<div id="04FE04"> </div>
<!-- <div id="04FE04"></div> -->
<p>- amikor <big><b>hővezetés</b></big>sel csak a mozgási energia lesz továbbadva a részecskék helybenmaradása mellett, vagy <br /> - <big><b>hőáramlás</b></big>sal amikor a közeg egy része magával viszi a hőenergiát, vagy <br /> - amikor egy anyaghalmaz (test) <big><b>hősugárzás</b></big> útján cserél energiát a környezetével. <span id="m04FE05"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőmérsékleti sugárzás " src="<?php  echo $hF;?>@/05mese.png" alt="Hőmérsékleti sugárzás " /></b> <a href="https://hu.wikipedia.org/wiki/Hőmérsékleti_sugárzás" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Hőmérsékleti sugárzás" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Hőmérsékleti sugárzás" /></a> </p>
<div id="04FE05"> </div>


<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>03/03FE.php"><img style="border: 0px solid; width: 32px; height: 32px;" title="vissza" src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" /></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>05/05FE.php"><img style="border: 0px solid; width: 32px; height: 32px;" src="<?php  echo $hF;?>@/02elore.jpg" alt="előre" /></a></td>
</tr>
</tbody>
</table>
<?php  include_once $pF . "100a.php"; include_once $pF . "100b.php"; include_once $pF . "100c.php"; ?>
</body>
</html>