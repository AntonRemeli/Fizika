<html>
<head>
<title>03FE</title>
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

$hF03='<?php  echo $hF;?>03/03FE';
window.onload = function () {
    document.getElementById("m03FE01").onclick = function () {
        open_url($hF03+'01.php?par=1','03FE01');
	}
    document.getElementById("m03FE02").onclick = function () {
        open_url($hF03+'02.php?par=1','03FE02');
	}
    document.getElementById("m03FE03").onclick = function () {
        open_url($hF03+'03.php?par=1','03FE03');
    }
    document.getElementById("m03FE04").onclick = function () {
        open_url($hF03+'04.php?par=1','03FE04');
    }
    document.getElementById("m03FE05").onclick = function () {
        open_url($hF03+'05.php?par=1','03FE05');
    }
}
</script>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>02/02FE.php"><img title="vissza"
src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" border="0"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>04/04FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="előre">&nbsp;</a></td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td>
<h2><a href="<?php  echo $hF;?>03/03FE.php">03. Kölcsönhatások</a><a href="<?php  echo $hF;?>00/00FE.php">  <img  src="<?php  echo $hF;?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>
</td>
<td>
<h2 style="text-align: right;">&nbsp;<a href="<?php  echo $hF;?>in/inFE.php"><img  src="<?php  echo $hF;?>@/00fel.jpg" alt="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a><a href="<?php  echo $hF;?>in/index.php">Fizika
egyszerűen</a>&nbsp;</h2>
</td>
</tr>
</tbody>
</table>

</b>
<b>Négy
alapvető </b><a
href="https://hu.wikipedia.org/wiki/Alapvet%C5%91_k%C3%B6lcs%C3%B6nhat%C3%A1sok"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Alapvető kölcsönhatások" title="Alapvető kölcsönhatások"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a><b>
kölcsönhatás van: </b><a
href="http://www.tankonyvtar.hu/en/tartalom/tamop412A/2010-0017_60_magfizika/ch01s02.html"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="A négy alapvető kölcsönhatás rendszere"
title="A négy alapvető kölcsönhatás rendszere"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="https://www.youtube.com/watch?v=JP9KP-fwFhk" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Quantum Mechanics for Dummies " title="Quantum Mechanics for Dummies "
src="<?php  echo $hF;?>@/08film.jpg"></a>
<ul>
<li><b>G: &nbsp;</b>a<b>
gravitáció </b>(ballisztika, bolygók mozgása, csillagok,
galaxisok dinamikája) <a
href="https://hu.wikipedia.org/wiki/Gravit%E1ci%F3" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="Gravitáció"
title="Gravitáció" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
 <a
href="http://gravitacioshullam.hu/" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="Gravitációs hullámok"
title="Gravitációs hullámok" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
 <a
href="http://ligo.elte.hu/news/media.php" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="Gravitációs hullámok: az univerzum hangjai"
title="Gravitációs hullámok: az univerzum hangjai" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="http://www.origo.hu/tudomany/20160211-gravitacios-hullam-einstein-fizika-felfedezes-fekete-lyuk.html" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="Origó:felfedezték a gravitációs hullámokat"
title="Origó:felfedezték a gravitációs hullámokat" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="http://index.hu/tudomany/2016/02/11/igazoltak_einstein_utolso_joslatat_is_felfedeztek_a_gravitacios_hullamokat/" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="Index:felfedezték a gravitációs hullámokat"
title="Index:felfedezték a gravitációs hullámokat" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>

<a
href="http://ligo.elte.hu/news/bbh_artist_1080p_25fps.mp4" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Két egymás körül keringő és összeolvadó fekete lyuk " title="Két egymás körül keringő és összeolvadó fekete lyuk"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="http://ligo.elte.hu/news/BinaryBlackHole.mp4" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Két egymás körül keringő és összeolvadó fekete lyuk " title="Két egymás körül keringő és összeolvadó fekete lyuk"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="http://ligo.elte.hu/news/Warped_Spacetime_Horizons_Short_1080p.mp4" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Két egymás körül keringő és összeolvadó fekete lyuk " title="Két egymás körül keringő és összeolvadó fekete lyuk"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=599IgzzhhAs" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Gravitációs hullámok moraja a világűr mélyéből" title="Gravitációs hullámok moraja a világűr mélyéből"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="http://videa.hu/player?v=ed9RiUQn2kzEka8C" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Gravitációs hullámok" title="Gravitációs hullámok"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=hhbMpe17fzA" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Gravitational waves: A three minute guide " title="Gravitational waves: A three minute guide"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=s06_jRK939I" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Brian Greene Explains The Discovery Of Gravitational Waves " title="Brian Greene Explains The Discovery Of Gravitational Waves"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="http://embed.indavideo.hu/player/video/837c0c8340?static=1&style=index" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="LIGO: gravitációs hullámok mérése " title="LIGO: gravitációs hullámok mérése"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=fBM1P_KV-L0" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Fekete lyuk csillagot reggelizik" title="Fekete lyuk csillagot reggelizik"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=ou3TukauccM" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Fekete lyuk csillagot ebédel" title="Fekete lyuk csillagot ebédel"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=gw-i_VKd6Wo" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="LIGO's First Detection of Gravitational Waves!" title="LIGO's First Detection of Gravitational Waves!"
src="<?php  echo $hF;?>@/08film.jpg"></a>
</li>
<li><b>E: &nbsp;</b>az<b>
elektromágneses </b>kölcsönhatás (kémiai reakciók:
1eV,&nbsp;&nbsp;elektromos és mágneses jelenségek) 
<a
href="https://hu.wikipedia.org/wiki/Elektrom%E1gness%E9g"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Elektromágnesség" title="Elektromágnesség"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="https://www.youtube.com/watch?v=BksyMWSygnc" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="What is Touch?" title="What is Touch?"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=NMgcX8UNIGY" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Real World Telekinesis" title="Real World Telekinesis"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=BqKeiiezqzc" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Magnetic Levitation " title="Magnetic Levitation "
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=hFA3XdXZ5TM" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="MAGNETS: How Do They Work?  " title="MAGNETS: How Do They Work? "
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=1TKSfAkWWN0" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="How Special Relativity Makes Magnets Work " title="How Special Relativity Makes Magnets Work "
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=ttZCKAMpcAo" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Theory of relativity explained in 7 mins " title="Theory of relativity explained in 7 mins "
src="<?php  echo $hF;?>@/08film.jpg"></a> 
<a
href="https://www.youtube.com/watch?v=RSeomJx_f5E" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Time Dilation with Stephen Hawking Ph.D" title="Time Dilation with Stephen Hawking Ph.D"
src="<?php  echo $hF;?>@/08film.jpg"></a> 

</li>
<li><b>W: </b>a<b>
gyenge </b>kölcsönhatás (Weak interaction,
radioaktivitás) <a
href="https://hu.wikipedia.org/wiki/Gyenge+k%F6lcs%F6nhat%E1s"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Gyenge kölcsönhatás" title="Gyenge kölcsönhatás"
src="<?php  echo $hF;?>@/04tudomany.jpeg"> </a><a
href="http://astro.u-szeged.hu/oktatas/asztrofizika/html/node30.html"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Gyenge kölcsönhatás a csillagokban"
title="Gyenge kölcsönhatás a csillagokban"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a></li>
<li><b>S: &nbsp;</b>az<b>
erős&nbsp;</b>kölcsönhatás&nbsp;(b interaction,
nukleáris reakciók: 1MeV, atomreaktor, atombomba, csillagok
égése)&nbsp; <a
href="https://hu.wikipedia.org/wiki/Er%3Fs+k%F6lcs%F6nhat%E1s"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Erős kölcsönhatás" title="Erős kölcsönhatás"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="https://www.youtube.com/watch?v=J3xLuZNKhlY" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Empty Space is NOT Empty" title="Empty Space is NOT Empty"
src="<?php  echo $hF;?>@/08film.jpg"></a>
<a
href="https://www.youtube.com/watch?v=Ztc6QPNUqls" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Your Mass is NOT From the Higgs Boson" title="Your Mass is NOT From the Higgs Boson"
src="<?php  echo $hF;?>@/08film.jpg"></a>
</li>
</ul>
<br>

Továbbá a következő "hagyományos" kölcsönhatásokat is meg kell
említenünk:<br>
&nbsp;&nbsp;&nbsp; - <b>M: mechanikai
</b>kölcsönhatás (billiárdgolyók ütközése, testek súrlódása, nyomás,
alakváltozás, stb...) <span id="m03FE01"><img
style="border: 0px solid ;"
src="<?php  echo $hF;?>@/05mese.png"
alt="Billiárdgolyók ütközése" title="Billiárdgolyók ütközése"></span> 
<a
href="http://tudasbazis.sulinet.hu/hu/termeszettudomanyok/fizika/fizika-7-evfolyam/kolcsonhatasok/mechanikai-kolcsonhatas"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Mechanikai kölcsönhatás" title="Mechanikai kölcsönhatás"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<br><div id="03FE01"></div>


&nbsp;&nbsp;&nbsp; - <b>T: termikus</b>
kölcsönhatás (hő terjedése, hősugárzás, stb...)&nbsp; <span id="m03FE02"><img
style="border: 0px solid ;"
src="<?php  echo $hF;?>@/05mese.png"
alt="Hő terjedése" title="Hő terjedése"></span> 
<a
href="http://tudasbazis.sulinet.hu/hu/termeszettudomanyok/fizika/fizika-7-evfolyam/kolcsonhatasok/termikus-kolcsonhatas"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Termikus kölcsönhatás SuliNet" title="Termikus kölcsönhatás SuliNet"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="http://www.tantaki.hu/fizika/termikus_kolcsonhatas"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Termikus kölcsönhatás TanTaki" title="Termikus kölcsönhatás TanTaki"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>

<br><div id="03FE02"></div>

&nbsp;&nbsp;&nbsp; <b>- K: kémiai </b>kölcsönhatások
(égés, rozsdásodás, intermolekuláris erők, stb...) &nbsp; <span id="m03FE03"><img
style="border: 0px solid ;"
src="<?php  echo $hF;?>@/05mese.png"
alt="Kémiai kölcsönhatások" title="Kémiai kölcsönhatások"></span> 
<a
href="https://hu.wikipedia.org/wiki/Er%C5%91s%20k%C3%B6lcs%C3%B6nhat%C3%A1s"
target="blank"> </a><a
href="http://kemiateszt.uw.hu/osszefogl/reakciok.htm" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="KÉMIAI REAKCIÓK" title="KÉMIAI REAKCIÓK"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
<a
href="https://hu.wikipedia.org/wiki/Er%C5%91s%20k%C3%B6lcs%C3%B6nhat%C3%A1s"
target="blank"> </a><a
href="https://www.mozaweb.hu/Lecke-KEM-Kemia_7-Az_eges-98577"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;" alt="AZ ÉGÉS"
title="AZ ÉGÉS" src="<?php  echo $hF;?>@/04tudomany.jpeg"></a><a
href="https://hu.wikipedia.org/wiki/Er%C5%91s%20k%C3%B6lcs%C3%B6nhat%C3%A1s"
target="blank"> </a><a
href="http://kertpont.hu/index.php?menu=cikk&amp;CId=742" target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Kémiai kölcsönhatások a talajban"
title="Kémiai kölcsönhatások a talajban"
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>

<br><div id="03FE03"></div>



<br>

<br>
Ezen a helyen célszerű az <b><i>erő 
<a href="https://hu.wikipedia.org/wiki/Erő" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Erő" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Erő" /></a>
és energia
<a href="https://hu.wikipedia.org/wiki/Energia" target="_blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="Energia" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="Energia" /></a>
</i></b> fogalmának tisztázása: kölcsönhatásban lévő részecskék erőt fejtenek ki egymásra, vagy egymáshoz ragadnak egy mélyponti energiával (a fölösleges energiát sugárzás formájában eresztik ki, mely az adott kölcsönhatás közvetítője egyben), vagy erőteljesen ellökődnek egymástól ami nagy mozgási energiát eredményez (a közös tömegközponthoz viszonyítva mozgásukat).




<br>

<table style="width: 100%;">
<tbody>
<tr>
<td><a href="<?php  echo $hF;?>02/02FE.php"><img title="vissza"
src="<?php  echo $hF;?>@/01vissza.jpg" alt="vissza" border="0"></a></td>
<td style="text-align: right;"><a href="<?php  echo $hF;?>04/04FE.php"><img
src="<?php  echo $hF;?>@/02elore.jpg" alt="előre">&nbsp;</a></td>
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


