<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M510 A Föld energiaháztartása</title>
</head>
<body>
<?php  include "@.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "...".$pF;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>

<i>
A kozmikus ablak-ok (napsugárzás-ablak, hősugárzás-ablak, rádió-ablak) valójában nem ennyire egyszerűek, mint ahogy az előző részben ez be lett mutatva. <br><br>

Második közelítésben el kell ismerni, hogy a napsugárzás-ablak ugyan átlátszó a napfény látható fényének és közeli infrasugárzásának, de valóban csak a napsugárzás fele jut a Föld felszínére: negyede a légkörből visszatükröződik a világűrbe, negyede pedig mégis elnyelődik a légkörben.<br><br>

A tiszta levegő valóban átlátszó a környezeti hősugárzás középső 8-14μm hullámhosszsávjában, azonban a vízpára már nem átlátszó (lásd: felhők, köd), így a környezeti hősugárzás azon fele, 200W/m<sup>2</sup>, melynek ki kellene jutnia az űrbe, csak ötödrészben jut ki közvetlenül, 40W/m<sup>2</sup>, a többi elnyelődik az alsó páradús levegőrétegekben. A nedves rétegekben elnyelt energia újra kisugárzódik, a felső száraz rétegek azonban úgy szűrik meg a sugárzást (minél magasabban vagyunk annál hidegebb a levegő és annál kevesebbet sugároz ki, de átengedi az alsóbb rétegekből jövő 8-14μm sávot, elnyeli az azon kívüleső sugárzást ), hogy csak a  8-14μm hullámhosszsáv sugárzása, mindösszesen 240W/m<sup>2</sup>, jut ki a világűrbe. <br><br>

A rádiósugárzás sem halad teljesen akadálymentesen a Föld légkörében.<br><br>

A légkör nem átlátszó tartományai pedig nem teljesen átlátszatlanok: rövidebb távokon a gamma-, X-, infra-, mikro- sugárzás még át tud jutni, minél hoszabb a fénysugár útja (mert hát valójában minden sugárzás fotonokból van), annál több az elnyelődési lehetőség. <br><br>

A Nap felszíne óriási mennyiségű hőt sugároz ki. A Föld távolságában ez 1360W/m<sup>2</sup>, ennyi energia éri a Föld légkörének legkülső rétegeit.<br><br>
Mivel a Föld fele árnyékban van ez az energia felére átlagolódik: 680W/m<sup>2</sup>. Söt, mivel csak az egyenlítőn merőleges a napsugárzás, a sarkokon és mindenkori esthajnal övekben ferdén érik a napsugarak a földfelszínt, úgy a Földet érő átlagos napenergia tovább feleződik 340W/m<sup>2</sup>-re.<br><br>

Az átlagosan beeső 340W/m<sup>2</sup> napsugárzás közel harmada, 100W/m<sup>2</sup>, visszaverődik a légkörből és a Föld felszínéről (70 és 30W/m<sup>2</sup> arányban), 70W/m<sup>2</sup> a légkörben nyelődik el, és csak a fele, 170W/m<sup>2</sup> jut a Föld felszínére.<br><br>

A Föld felszíne ezen felül 320W/m<sup>2</sup> (!) légköri sugárzást is kap (tehát mindösszesen 490W/m<sup>2</sup>), amiből 100W/m<sup>2</sup> megy párolgásra és termik-képződésre (azaz 80W/m<sup>2</sup> felhők-, és 20W/m<sup>2</sup> felszálló légtömegek képződésére), az átlagosan 15C körüli földfelszín pedig 390W/m<sup>2</sup> hősugárzást bocsájt ki.<br><br>

A légkör 390W/m<sup>2</sup> energiát kap a földfelszíntől, 100W/m<sup>2</sup> energiát pára és termik alakjában, és 70W/m<sup>2</sup> energiát közvetlenül a napsugárzás elnyelésével. Az összeharácsolt 560W/m<sup>2</sup>-ből 320W/m<sup>2</sup>-t visszasugároz a Föld felé, 240W/m<sup>2</sup>-t pedig az űrbe bocsájt ki.<br><br>

Summa-summárum: a bejövő 340W/m<sup>2</sup> napsugárzásból 100W/m<sup>2</sup> rögtön visszaverődik az űrbe, 240W/m<sup>2</sup> pedig környezeti infrasugarak formájában hagyja el a Föld felszínét.<br><br>

<b>Mindez röviden:</b><br><br>

<b>a Nap lead = Föld kap : </b>  340W/m<sup>2</sup>=100+70+170, NapSug=TükrLevFöld+LevElny+FöldElny, <br> 

<b>a felszín kap = lead : </b>170+320=100+390, FöldElny+LevSug=TermikPárolg+FöldSug,<br> 
<b>a légkör kap = lead:</b> 70+100+390=240+320, LevElny+TermikPárolg+FöldSug=KozmAbl+LevSug<br> 
<b>kapok = adok : </b>340=100+240, NapSug=TükrLevFöld+KozmAbl.<br> 

 </i><br>



</body>
</html>


