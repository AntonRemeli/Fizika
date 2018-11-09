<html>
<head>
<title>05FE</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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

$hF05='<?php  echo $hF;?>05/05FE';
window.onload = function () {
    document.getElementById("m05FE01").onclick = function () {
        open_url($hF05+'01.php?par=1','05FE01');
	}
    document.getElementById("m05FE02").onclick = function () {
        open_url($hF05+'02.php?par=1','05FE02');
	}
    document.getElementById("m05FE03").onclick = function () {
        open_url($hF05+'03.php?par=1','05FE03');
    }
    document.getElementById("m05FE04").onclick = function () {
        open_url($hF05+'04.php?par=1','05FE04');
    }
    document.getElementById("m05FE05").onclick = function () {
        open_url($hF05+'05.php?par=1','05FE05');
    }
    document.getElementById("m05FE06").onclick = function () {
        open_url($hF05+'06.php?par=1','05FE06');
    }
    document.getElementById("m05FE07").onclick = function () {
        open_url($hF05+'07.php?par=1','05FE07');
    }
    document.getElementById("m05FE08").onclick = function () {
        open_url($hF05+'08.php?par=1','05FE08');
    }
    document.getElementById("m05FE09").onclick = function () {
        open_url($hF05+'09.php?par=1','05FE09');
    }
    document.getElementById("m05FE10").onclick = function () {
        open_url($hF05+'10.php?par=1','05FE10');
    }

}
</script>
</p>
<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>04/04FE.php"><img title="vissza" src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>06/06FE.php"><img src="<?php  echo $hF;?>@/02elore.jpg" alt="előre" /> </a></td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td>
<h2><a href="05FE.php">05.Csillagfényben</a><a href="<?php  echo $hF;?>00/00FE.php">  <img  src="<?php  echo $hF;?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>
</td>
<td>
<h2 style="text-align: right;"><a href="<?php  echo $hF;?>in/inFE.php"><img  src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a><a href="<?php  echo $hF;?>in/index.php">Fizika egyszerűen </a></h2>
</td>
</tr>
</tbody>
</table>
<p><br><big><b>Kirchhoff törvénye </b></big> szerint "termikus egyensúly <a href="http://www.vilaglex.hu/Lexikon/Html/TermEgye.htm" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Termikus egyensúly" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Termikus egyensúly" /></a> esetében a kisugárzott energia megegyezik az elnyelt energiával", azaz: <big><b>a = e </b></big>(abszorpció=emisszió). Ez annyit jelent, hogy jó sugárzók egyben jó elnyelők az adott hullámhosszon és hőmérsékleten.<br /> <br /> Kirchhoff fenti 1859-ben megfogalmazott törvényével összhangban az a test, mely adott hőmérsékleten nagyobb elnyelőképességgel bír ugyancsak nagyobb sugárzóképességet kell hogy felmutasson ugyanazon hullámhosszon.</p>
<p><span id="m05FE01">Az abszolút fekete test minden sugárzást elnyel, az aszolút fehér minden sugárzást visszatükröz. <img style="border: 0px solid; width: 25px; height: 25px;" title="Korom és tükör:" src="<?php  echo $hF;?>@/05mese.png" alt="Korom és tükör:" /></span></p>
<div id="05FE01"> </div>
<p><span id="m05FE02">Az abszolút szürke felület minden hullámhosszon azonos mértékben nyeli el a sugárzást, a színes felület a rá jellemző szín kivételével elnyel minden sugárzást. <img style="border: 0px solid; width: 25px; height: 25px;" title="Szín és szürkeség:" src="<?php  echo $hF;?>@/05mese.png" alt="Szín és szürkeség:" /></span></p>
<div id="05FE02"> </div>
<p><span id="m05FE03">Zárt sugárzási térben (gömbtükör belseje) különböző hőmérsékletű felületek hőmérséklete a kölcsönös besugárzásnak köszönhetően ki fog egyenlítődni. <img style="border: 0px solid; width: 25px; height: 25px;" title="Termikus egyensúly:" src="<?php  echo $hF;?>@/05mese.png" alt="Termikus egyensúly:" /></span></p>
<div id="05FE03"> </div>
<p><span id="m05FE04">Nyílt térben soha sem fog kiegyenlítődni különböző testek hőmérséklete (kivéve a végkifejletet, amikor 1Google = 10<sup>100</sup> év elteltével az egész univerzum az abszolút nulla hőmérsékletre lehül), hanem dinamikus egyensúly fog kialakulni a meleget ontó és annak sugárzását elnyelő majd továbbsugárzó test között. <img style="border: 0px solid; width: 25px; height: 25px;" title="Végtelen napsugárzás:" src="<?php  echo $hF;?>@/05mese.png" alt="Végtelen napsugárzás:" /></span></p>
<div id="05FE04"> </div>
<p><span id="m05FE05">Amennyiben azonban nem az üresen kongó világűr van a hidegebb test körül, hanem egy köztes hőmérsékletű háttér, úgy a környezeti sugárzás is bele fog szólni a dinamikus egyensúly kialakulásához. <img style="border: 0px solid; width: 25px; height: 25px;" title="Környezeti sugárzás:" src="<?php  echo $hF;?>@/05mese.png" alt="Környezeti sugárzás:" /></span> </p>
<div id="05FE05"> </div>
<p><span id="m05FE06">Az abszolút feketetestet úgy kapjuk, hogy  egy nagy üreges gömbön kicsi nyílást nyitunk: a nyílás minden beeső sugárzást elnyel és pontosan a feketetest spektrumában sugároz kifelé hőmérséklete függvényében és függetlenül attól, hogy milyen (korom vagy tükör) anyag alkotja. <img style="border: 0px solid; width: 25px; height: 25px;" title="Az üresen kongó gömb" src="<?php  echo $hF;?>@/05mese.png" alt="Az üresen kongó gömb" /></span> </p>
<div id="05FE06"> </div>


<p> Különböző hőmérsékletű objektumok háttérsugárzása...
<span id="m05FE07"><img style="border: 0px solid;" title="Különböző hőmérsékletű objektumok háttérsugárzása" src="<?php  echo $hF;?>@/05mese.png" alt="Különböző hőmérsékletű objektumok háttérsugárzása" /></span> 
</p>
<div id="05FE07"> </div>

<p> Az üveggömb háttérsugárzása...
<span id="m05FE08"><img style="border: 0px solid;" title="Az üveggömb háttérsugárzása" src="<?php  echo $hF;?>@/05mese.png" alt="Az üveggömb háttérsugárzása" /></span> 
</p>
<div id="05FE08"> </div>

<p> A "kozmikus ablak" az a szellőztető ablak, melyen a Föld kieresztheti a "gőzt"...
<span id="m05FE09"><img style="border: 0px solid;" title="A kozmikus ablak" src="<?php  echo $hF;?>@/05mese.png" alt="A kozmikus ablak" /></span> 
</p>
<div id="05FE09"> </div>

<p> A Föld energiaháztartása: 
<span id="m05FE10"><img style="border: 0px solid;" title="A Föld energiaháztartása " src="<?php  echo $hF;?>@/05mese.png" alt="A Föld energiaháztartása" /><a
href="http://www.termeszetvilaga.hu/szamok/tv2009/tv0902/cst1.jpg" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="A Föld energiaháztartása:"
title="A Föld energiaháztartása:" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a></span> 
</p>
<div id="05FE10"> </div>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>04/04FE.php"><img title="vissza" src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>06/06FE.php"><img src="<?php  echo $hF;?>@/02elore.jpg" alt="előre" /> </a></td>
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


