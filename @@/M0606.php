<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M606 Környezeti sugárzás, hőáramlás és hővezetés</title>
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

<br>
<i>

A Föld felszínén elkerülhetetlen tényező a 300-500W/m<sup>2</sup> teljesítményű 10um hullámhosszúságú háttérsugárzás  (mely ugyan, csak a napfény számára átlátszó polietilén búrán át nem tud átjutni az  előlapra, de a hátlapot alaposan "alátüzeli"). Ezt a háttérsugárzást a 0-30C meleg környező objektumok adják le (a napsütötte tárgyak ennél sokkal forróbbak).
 <br><br>
 
 Továbbá számolnunk kell a légáramlásos hűtéssel meg az esetleges hővezetéssel is a véges vastagságú anyagban, aminek következtében az előbb felsorolt anyagok hőmérséklete megközelítőleg 60, 70, 80, 90 és  100C lesz, mint ahogy  azt az alábbi táblázatban szemléltetjük is:
<br>
<br>
<table border="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" align="center" valign="middle" height="17"><b>A Föld felszínén:</b></td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
</tr>
<tr>
<td align="left" height="17"> </td>
<td colspan="2" align="center" valign="middle"><b>Hőmérséklet</b></td>
<td align="left"> </td>
<td colspan="7" align="left" valign="middle" bgcolor="#FFFF00"><b>Feketetest sugárzása a -273C űrbe</b></td>
</tr>
<tr>
<td align="center" height="17">A felszín</td>
<td align="center">K:</td>
<td align="center"><b>C:</b></td>
<td align="left">T*T*T*T </td>
<td align="center" bgcolor="#FFFF00">W/m2</td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
<td align="left"> </td>
</tr>
<tr>
<td align="center" height="17">sugárzási</td>
<td align="center">273</td>
<td align="center"><b>0</b></td>
<td align="right">5554571841</td>
<td align="center" bgcolor="#FFFF00">315</td>
<td colspan="6" align="left" valign="middle" bgcolor="#FFCC00"><b>Valós test sugárzása a -273C űrbe</b></td>
</tr>
<tr>
<td align="center" height="17">tényezője:</td>
<td align="center">283</td>
<td align="center"><b>10</b></td>
<td align="right">6414247921</td>
<td align="center" bgcolor="#FFFF00">364</td>
<td align="center" bgcolor="#FFCC00">W/m2</td>
<td colspan="5" align="left" valign="middle" bgcolor="#FF9900"><b>Valós test sugárzása a +33C környezetbe</b></td>
</tr>
<tr>
<td align="center" height="17">e:</td>
<td align="center">290</td>
<td align="center"><b>17</b></td>
<td align="right">7072810000</td>
<td align="center" bgcolor="#FFFF00">401</td>
<td align="center" bgcolor="#FFCC00"> </td>
<td align="center" bgcolor="#FF9900">W/m2</td>
<td colspan="4" align="left" valign="middle" bgcolor="#00CCFF"><b>Áramlási és vezetési hőátadás</b></td>
</tr>
<tr>
<td align="center" height="17">1</td>
<td align="center">306</td>
<td align="center"><b>33</b></td>
<td align="right">8767700496</td>
<td align="center" bgcolor="#FFFF00">497</td>
<td align="center" bgcolor="#FFCC00">497</td>
<td align="center" bgcolor="#FF9900">0</td>
<td align="center" bgcolor="#00CCFF">W/m2</td>
<td align="left"> </td>
</tr>
<tr>
<td align="center" height="17">1</td>
<td align="center">328</td>
<td align="center"><b>55</b></td>
<td align="right">11574317056</td>
<td align="center" bgcolor="#FFFF00">656</td>
<td align="center" bgcolor="#FFCC00">656</td>
<td align="center" bgcolor="#FF9900">159</td>
<td align="center" bgcolor="#00CCFF">841</td>
<td align="left">feketetest</td>
</tr>
<tr>
<td align="center" height="17">0,9</td>
<td align="center">333</td>
<td align="center"><b>60</b></td>
<td align="right">12296370321</td>
<td align="center" bgcolor="#FFFF00">697</td>
<td align="center" bgcolor="#FFCC00">628</td>
<td align="center" bgcolor="#FF9900">180</td>
<td align="center" bgcolor="#00CCFF">820</td>
<td align="left">fa, papír, üveg, építőanyagok, festékek</td>
</tr>
<tr>
<td align="center" height="17">0,5</td>
<td align="center">343</td>
<td align="center"><b>70</b></td>
<td align="right">13841287201</td>
<td align="center" bgcolor="#FFFF00">785</td>
<td align="center" bgcolor="#FFCC00">392</td>
<td align="center" bgcolor="#FF9900">144</td>
<td align="center" bgcolor="#00CCFF">856</td>
<td align="left">horgany-, cink-, ezüst- és alufesték</td>
</tr>
<tr>
<td align="center" height="17">0,2</td>
<td align="center">353</td>
<td align="center"><b>80</b></td>
<td align="right">15527402881</td>
<td align="center" bgcolor="#FFFF00">880</td>
<td align="center" bgcolor="#FFCC00">176</td>
<td align="center" bgcolor="#FF9900">77</td>
<td align="center" bgcolor="#00CCFF">923</td>
<td align="left">csokoládépapír</td>
</tr>
<tr>
<td align="center" height="17">0,1</td>
<td align="center">363</td>
<td align="center"><b>90</b></td>
<td align="right">17363069361</td>
<td align="center" bgcolor="#FFFF00">985</td>
<td align="center" bgcolor="#FFCC00">98</td>
<td align="center" bgcolor="#FF9900">49</td>
<td align="center" bgcolor="#00CCFF">951</td>
<td align="left">alumíniumlemez, acél</td>
</tr>
<tr>
<td align="center" height="17">0,05</td>
<td align="center">373</td>
<td align="center"><b>100</b></td>
<td align="right">19356878641</td>
<td align="center" bgcolor="#FFFF00">1098</td>
<td align="center" bgcolor="#FFCC00">55</td>
<td align="center" bgcolor="#FF9900">30</td>
<td align="center" bgcolor="#00CCFF">970</td>
<td align="left">fényes alumíniumfólia</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>


<br>
<br>
Minden felület valamilyen vastagságú anyagot (tömeget) fed, például 10cm vastag betonfal (mely négyzetmétere 200kg sulyú, hőkapacitása 40 liter víz hőkapacitásával egyenértékű),<br>
tehát a napi átlagos 4kWh besugárzott napenergia az egész tömb hőmérsékletét 100C fokra fogja felmelegíteni (10 liter víz 100C fokra való felmelegítéséhez megközelítőleg 1kWh energia szükséges, feltételeztük továbbá, hogy nincsen hőveszteség).<br>
Azonban, a meleg felület felett áramló hideg levegő (1kWh hőenergiát  visz el az 500m<sup>3</sup> 10C fokkal felmelegített levegő),<br>
meg a hővezetés és hősugárzás annyi energiát vesznek el a betonlaptól, hogy az megközelítőleg csak 58C fokra fog felmelegedni.
<br><br>
Amikor a 10cm vastag betonfal napsütötte oldala 58C meleg, hátoldalán a szobahőmérséklet pedig 20C:<br>
- a hővezetés 380W/m<sup>2</sup> lesz (=38K*10W/m<sup>2</sup>K:  1m vastag betonfal hővezetési tényezője  1W/m<sup>2</sup>K, tizedvastagságé tízszer nagyobb:  10W/m<sup>2</sup>K, amit még harmincnyolccal kell megszorozni a 38C fokos előlap-hátlap hőmérsékletkülönbség végett).<br>

- 24W/m<sup>2</sup>K hőátadási tényezővel számolunk kültéri falak esetében: 33C kültéri léghőmérséklet esetén az 58C fokra felmelegedett külső fal 600W/m<sup>2</sup> hőenergiát ad le hőáramlás és hősugárzás útján (600=25*24=240+240+120 a 10+10+5C hőmérsékletkülönbségből kifolyólag). <br>

- Az 58C meleg felszín hőkisugárzása 680W/m<sup>2</sup>, a 33C környezet visszasugárzása 500W/m<sup>2</sup>, amiből kifolyólag 180W/m<sup>2</sup> hőenergiát sugárzás útján ad le.
<br>
- Mindösszesen az 58C meleg napsütötte betonfal 1kW/m<sup>2</sup> hőenergiát disszipál (380+600-180+180=980), ami pont egyensúlyban van az 1kW/m<sup>2</sup> napsütéssel.
<br><br>

10cm kőzetgyapot vagy hungarocell alkalmazásával (a 10cm beton helyett) a napsütötte falfelszín 58C fokról 73C fokra melegszik:<br>
- a hővezetés 530W/m<sup>2</sup>-ről (530=53*10, 53=73-20) annak huszonötödrészére 21W/m<sup>2</sup>-re csökken (1W/m<sup>2</sup>K a betonfal hővezetési tényezője, a kőzetgyapot vagy hungarocell hővezetési tényezője pedig 0.04W/m<sup>2</sup>K ) ,
<br>
- ami következtében az elnyelt hőenergiának csak elenyésző része jut a hátoldalig, így érthető, hogy az előlap 58C helyett 73C-ra melegszik.<br>
-a jelentősen forróbb előlap felületi hőátadása 580W/m<sup>2</sup> helyett  960W/m<sup>2</sup>-re emelkedik ( 24W/m<sup>2</sup>K   hőátadási tényezőt 73-33=40C hőmérsékletkülönbséggel szorzunk). <br>
- Az 73C meleg felszín hőkisugárzása 810W/m<sup>2</sup>, a 33C környezet visszasugárzása 500W/m<sup>2</sup>, amiből kifolyólag 310W/m<sup>2</sup> hőenergiát sugárzás útján ad le.
<br>
- A 73C meleg napsütötte hőszigetelt fal 1kW/m<sup>2</sup> hőenergiát disszipál (21+960-310+310=981), ami pont egyensúlyban van az 1kW/m<sup>2</sup> napsütéssel.
<br><br>

<table border="0" cellspacing="0">
<tbody>
<tr>
<td colspan="2" align="center" valign="bottom" height="17"><strong><em>Hőmérséklet</em></strong></td>
<td align="left" valign="bottom"><em> </em></td>
<td colspan="6" align="left" valign="bottom" bgcolor="#FFFF00"><strong><em>Feketetest sugárzása a -273C űrbe</em></strong></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>T(K):</em></td>
<td align="center" valign="bottom"><strong><em>T(C):</em></strong></td>
<td align="left" valign="bottom"><em>T*T*T*T</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>W/m2</em></td>
<td colspan="5" align="left" valign="bottom" bgcolor="#FF9900"><strong><em>Valós test sugárzása a +33C környezetbe</em></strong></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>270</em></td>
<td align="center" valign="bottom"><strong><em>-3</em></strong></td>
<td align="right" valign="bottom"><em>5314410000</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>301</em></td>
<td align="center" valign="bottom" bgcolor="#FF9900"><em>-196</em></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>306</em></td>
<td align="center" valign="bottom"><strong><em>33</em></strong></td>
<td align="right" valign="bottom"><em>8767700496</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>497</em></td>
<td align="center" valign="bottom" bgcolor="#FF9900"><em>0</em></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>328</em></td>
<td align="center" valign="bottom"><strong><em>55</em></strong></td>
<td align="right" valign="bottom"><em>11574317056</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>656</em></td>
<td align="center" valign="bottom" bgcolor="#FF9900"><em>159</em></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>338</em></td>
<td align="center" valign="bottom"><strong><em>65</em></strong></td>
<td align="right" valign="bottom"><em>13051691536</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>740</em></td>
<td align="center" valign="bottom" bgcolor="#FF9900"><em>243</em></td>
</tr>
<tr>
<td align="center" valign="bottom" height="17"><em>365</em></td>
<td align="center" valign="bottom"><strong><em>92</em></strong></td>
<td align="right" valign="bottom"><em>17748900625</em></td>
<td align="center" valign="bottom" bgcolor="#FFFF00"><em>1006</em></td>
<td align="center" valign="bottom" bgcolor="#FF9900"><em>509</em></td>
</tr>
</tbody>
</table>

<br>
</i>
</body>
</html>


