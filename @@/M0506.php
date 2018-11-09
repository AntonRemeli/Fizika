<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M506 Az üresen kongó gömb</title>
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

 A következőkben figyelembe vesszük a felületek valós  elnyelési és sugárzási (abszorpciós-emissziós) tulajdonságait is úgy, hogy az alábbi táblázat feketetestre megadott sugárzási értékeit 0.9 szorzóval vesszük  valós anyagok esetében (a legtöbb anyagra igaz), 0.8 szorzóval a légkör esetében
<a href="http://www.acs.org/content/acs/en/climatescience/atmosphericwarming/singlelayermodel.html" target="blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="A Single-Layer Atmosphere Model" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="A Single-Layer Atmosphere Model" /></a>, és 0.1 szorzóval a tükröző felületek esetében (ami akár 0.01 is lehet fényesre polírozott fémfelületek esetében a környezeti hősugárzás hullámhossz-energiatartományában). Továbbá a felületi hőátadás 8 és 24W/m<sup>2</sup>K tényezőjét megbontjuk a szigorúan vett sugárzási (egyik oldalról), és konvektív-légáramlásos komponensre (másik oldalról).
 
 
 <table border="0" cellspacing="0"></colgroup>
<tbody>
<tr>
<td colspan="2" align="center" valign="middle" height="17"><strong>Hőmérséklet</strong></td>
<td align="left"> </td>
<td colspan="7" align="left" valign="middle" bgcolor="#FFFF00"><strong>Feketetest sugárzása a -273C űrbe</strong></td>
</tr>
<tr>
<td align="center" height="17">T(K):</td>
<td align="center"><strong>T(C):</strong></td>
<td align="right"><em><span style="font-family: 'Liberation Serif';">T*T*T*T </span></em></td>
<td align="center" bgcolor="#FFFF00">W/m2</td>
</tr>
<tr>
<td align="center" height="17">163</td>
<td align="center"><strong>-110</strong></td>
<td align="right">705911761</td>
<td align="center" bgcolor="#FFFF00">40</td>
</tr>
<tr>
<td align="center" height="17">180</td>
<td align="center"><strong>-93</strong></td>
<td align="right">1049760000</td>
<td align="center" bgcolor="#FFFF00">60</td>
</tr>
<tr>
<td align="center" height="17">270</td>
<td align="center"><strong>-3</strong></td>
<td align="right">5314410000</td>
<td align="center" bgcolor="#FFFF00">301</td>
</tr>
<tr>
<td align="center" height="17">276</td>
<td align="center"><strong>3</strong></td>
<td align="right">5802782976</td>
<td align="center" bgcolor="#FFFF00">329</td>
</tr>
<tr>
<td align="center" height="17">280</td>
<td align="center"><strong>7</strong></td>
<td align="right">6146560000</td>
<td align="center" bgcolor="#FFFF00">349</td>
</tr>
<tr>
<td align="center" height="17">288</td>
<td align="center"><strong>15</strong></td>
<td align="right">6879707136</td>
<td align="center" bgcolor="#FFFF00">390</td>
</tr>
<tr>
<td align="center" height="17">289,66</td>
<td align="center"><strong>16,66</strong></td>
<td align="right">7039699246</td>
<td align="center" bgcolor="#FFFF00">399</td>
</tr>
<tr>
<td align="center" height="17">290</td>
<td align="center"><strong>17</strong></td>
<td align="right">7072810000</td>
<td align="center" bgcolor="#FFFF00">401</td>
</tr>
<tr>
<td align="center" height="17">292</td>
<td align="center"><strong>19</strong></td>
<td align="right">7269949696</td>
<td align="center" bgcolor="#FFFF00">412</td>
</tr>
<tr>
<td align="center" height="17">300</td>
<td align="center"><strong>27</strong></td>
<td align="right">8100000000</td>
<td align="center" bgcolor="#FFFF00">459</td>
</tr>
<tr>
<td align="center" height="17">304</td>
<td align="center"><strong>31</strong></td>
<td align="right">8540717056</td>
<td align="center" bgcolor="#FFFF00">484</td>
</tr>
<tr>
<td align="center" height="17">306</td>
<td align="center"><strong>33</strong></td>
<td align="right">8767700496</td>
<td align="center" bgcolor="#FFFF00">497</td>
</tr>
</tbody>
</table>
Vegyük észre, hogy szobahőmérsékleti energiatartományban fokonként 4-6W/m<sup>2</sup> lesz nagyobb a feketetest-kisugárzás. Ebből máris sejthető, hogy a felületi hőátadás sugárzási komponense 4W/m<sup>2</sup>K lesz általában, az esetek többségében, azaz az a=e=0.9 elnyelési és sugárzási (abszorpció és emisszió) tényező esetében. Erősen tükröző (magas reflektivitás, a=e=0.1) anyagok esetében a a felületi hőátadás sugárzási komponense ennek tized-, vagy akár századrésze.
<br> <br>
Amikor a háttér sugárzásáról beszélünk, akkor egy zárt rendszerről beszélünk (például egy gömb belseje, mely kifelé nem veszít energiájából) , mely annak ellenére, hogy valós a=e=0.9 elnyelési és sugárzási  tényezővel rendelkezik, és a feketetest 400W/m<sup>2</sup> kisugárzásának csak 90%-át, 360W/m<sup>2</sup> hőenergiát sugároz ki 17C fok szobahőmérsékleten, mégis összességben 400W/m<sup>2</sup> sugárzást ad le azáltal, hogy: <br> 
- a környező tárgyak által kisugárzott 360W/m<sup>2</sup>  ráeső környezeti sugárzás 10%-át visszatükrözi, ami első közelítésben 36W/m<sup>2</sup>, továbbá önmaga is  kisugároz  360W/m<sup>2</sup> energiát 17C fokon. <br> 
-Második közelítésben már a 36+360W/m<sup>2</sup> sugárzás 10%-át tükrözi, ami majdnem 40W/m<sup>2</sup>, és így érthető, hogy a valós a=e=0.9 elnyelési és sugárzási  tényezővel rendelkező környezet környezeti sugárzása MÉGIS 400W/m<sup>2</sup>! És itt megáll a sor, mert a zárt rendszer pont annyi energiát nyel el mint amennyit kisugároz, egyensúlyi állapotban van.

 <br> <br> 
Egy erősen tükröző zárt rendszer háttérsugárzása, annak ellenére, hogy  a=e=0.1 elnyelési és sugárzási  tényezővel rendelkezik, és a feketetest 400W/m<sup>2</sup> kisugárzásának csak 10%-át, 40W/m<sup>2</sup> hőenergiát sugároz ki 17C fok szobahőmérsékleten, mégis összességben 400W/m<sup>2</sup> sugárzást ad le azáltal, hogy: <br> 
- a ráeső környezeti sugárzás 90%-át visszatükrözi, ami első közelítésben 36W/m<sup>2</sup> (mert az erősen tükröző felületek 17C fokon  40W/m<sup>2</sup> sugárzást bocsájtanak ki), továbbá önmaga is  kisugároz  40W/m<sup>2</sup> energiát 17C fokon.  <br> 
- Második közelítésben már a 36+40W/m<sup>2</sup> sugárzás 90%-át tükrözi, ami 70W/m<sup>2</sup>, amihez 40W/m<sup>2</sup> hősugárzás párosul 17C fokon.<br> 
- Harmadik közelítésben már a 70+40W/m<sup>2</sup> sugárzás 90%-át tükrözi, ami 100W/m<sup>2</sup>, amihez 40W/m<sup>2</sup> hősugárzás párosul 17C fokon.<br> 
- N-edik közelítésben már a ráeső 400W/m<sup>2</sup> sugárzás 90%-át tükrözi, ami 360W/m<sup>2</sup> (10%-át elnyeli, ami 40W/m<sup>2</sup>), amihez 40W/m<sup>2</sup> hősugárzás párosul 17C fokon. És itt megáll a sor, mert pont annyi energiát nyel el mint amennyit kisugároz, egyensúlyi állapotban van. És így érthető, hogy az a=e=0.1 elnyelési és sugárzási  tényezővel rendelkező erősen tükröző környezet környezeti sugárzása MÉGIS 400W/m<sup>2</sup>!
 <br> <br> 
 Amikor pedig egy  olyan zárt rendszer háttérsugárzásáról beszélünk, mely egyik fele erősen tükröz (a=e=0.1 elnyelési és sugárzási  tényezővel rendelkezik), másik fele pedig erősen elnyel és kisugároz (a=e=0.9 elnyelési és sugárzási  tényezővel rendelkezik), akkor is összességben 400W/m<sup>2</sup> sugárzást ad le azáltal, hogy: <br> 
- a tükröző rész a ráeső környezeti sugárzás 90%-át visszatükrözi, ami első közelítésben 324W/m<sup>2</sup> (mert a vele átellenes erősen sugárzó felület 17C fokon  360W/m<sup>2</sup> sugárzást bocsájt ki), továbbá önmaga is  kisugároz  40W/m<sup>2</sup> energiát 17C fokon.  <br> 
- Második közelítésben az átellenes erősen elnyelő felület a ráeső 324+40W/m<sup>2</sup> sugárzás 10%-át tükrözi, ami 36W/m<sup>2</sup>, amihez saját 360W/m<sup>2</sup> hősugárzását párosítja 17C fokon.<br> 
- Harmadik közelítésben a tükröző rész már a 36+360W/m<sup>2</sup> sugárzás 90%-át tükrözi, ami 356W/m<sup>2</sup>, amihez saját 40W/m<sup>2</sup> hősugárzását párosítja 17C fokon.<br> 
- N-edik közelítésben már a ráeső 400W/m<sup>2</sup> sugárzás 90%-át tükrözi, ami 360W/m<sup>2</sup> (10%-át elnyeli, ami 40W/m<sup>2</sup>), amihez 40W/m<sup>2</sup> hősugárzás párosul 17C fokon. És itt megáll a sor, mert pont annyi energiát nyel el mint amennyit kisugároz, egyensúlyi állapotban van. És így érthető, hogy a vegyes összetételű a=e=0.1  és a=e=0.9 elnyelési és sugárzási  tényezővel rendelkező  környezet környezeti sugárzása MÉGIS 400W/m<sup>2</sup>!
 <br> <br> 
 
 Tanulságként leszögezhetjük, hogy a háttérsugárzás NEM függ az azt alkotó tárgyak és közegek minőségétől, amennyiben mind EGYAZON HŐMÉRSÉKLETEN vannak: a háttérsugárzás a feketetest sugárzásával esik egybe.
<br> <br> 
Amennyiben azonban két átellenes felületünk van, különböző hőmérsékleten (vagy egy olyan zárt gömb, melynek egy része más hőmérsékletű), akkor az eredő háttérsugárzás a hideg és a meleg felület feketetest-sugárzása között lesz, arányosan a felületek nagyságával:<br> 
- egy 17C belhőmérsékletű repülő sugárzási tere 400W/m<sup>2</sup> lesz, függetlenül attól, hogy a -3C fok hideg ablak sugárzása 300W/m<sup>2</sup> (mert a jéghideg ablak a felületek csupán 1%-át adja) ,<br> 
- azonban egy 17C belhőmérsékletű  jéghideg üveggömb sugárzási tere 300W/m<sup>2</sup> lesz (a -3C fok hideg üveg sugárzása nem is 300W/m<sup>2</sup>, hanem  270W/m<sup>2</sup>, de az átellenes üvegfelület sugárzásának 10%-át visszatükrözi, és a legvégén mégis 300W/m<sup>2</sup> sugárzás hagyja el az üvegfelületeket). 
 
  <br> <br> 
Az eddigiekben feltételeztük, hogy a gömb külső felületén kifelé sugárzás, energiaveszteség nincsen: az üresen kongó gömb kívülről egy második százszázalékban tükröző gömmbel van körülvéve, vagy egy nagyon vastag nikecell vagy kőzetgyapot bundával van bebugyolálva. Minden esetre nincsen hőveszteség kifelé, a külső búra a világűr hőmérsékletén van, ami abszolút nulla, nulla Kelvin fok, 0K (vagy pontosabban: 3K, az ősrobbanás fényfelvillanásának legyengült sugárzása, a kozmikus háttérsugárzás hőmérséklete).<br> <br> 
 
 Amennyiben azonban az üresen kongó gömb üvegből volna, mely átereszti a látható fényt, vagy olyan különös "üvegből", mely átereszti a 17C foknak megfelelő 400W/m<sup>2</sup> hősugárzás 20%-át, a többit pedig mind elnyeli és újra kisugározza (de csak befelé, mert belső felülete 17C, külső felülete -270C=3K így kifelé nincs hősugárzás), akkor a belső sugárzási tér nem 400W/m<sup>2</sup> értéken állapodna meg ami a 80% elnyelő-kisugárzó és 20% tükröző felületekre jellemző, hanem 320W/m<sup>2</sup> értéken stabilizálódna, mert csak 80% elnyelés-kisugárzás van, a visszatükrözés hiányzik, 20% transzparencia (átlátszóság) van. <br> <br> 
 
 Ilyen rendszer valóban a Földünk, a földfelszín  légköri búrájával. A kiáramló 20% hősugárzás ellenére mégis stacionárius rendszerünk van, mert egy másik ablakon (a látható fény ablakán!) bejön az elveszett energia...
 
</i>
</body>
</html>


