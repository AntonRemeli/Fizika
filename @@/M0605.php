<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M605 A hősugárzásról részletesen</title>
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
Sugárzó napfényben (1kW/m<sup>2</sup> teljesítmény,  a látható tartomány 500nm = 0.5 um hullámhosszon a csúcsteljesítmény) a legtöbb anyag elnyeli a sugárzás javát, csak 5-10%-ot tükröz vissza.<br>

<b>Az elnyelt energia vissza-kisugárzásához:</b><br> 
- a megszokott <b> e = 0.9 </b> sugárzási tényezővel rendelkező anyagok felületük hőmérsékletét 100C fokra fogják megemelni,<br>
- az <b> e = 0.5 </b> sugárzási tényezővel rendelkező alufestékkel festett felületek 160C fokra kell hogy felmelegedjenek ahhoz, hogy 1kW/m<sup>2</sup> energiát kisugározzanak, <br>
- az <b> e = 0.2 </b> sugárzási tényezővel rendelkező csokoládépapír 272C fokra, <br>
- az <b> e = 0.1 </b> sugárzási tényezővel rendelkező alumíniumlemez 375C fokra,<br>
- a legalacsonyabb  <b> e = 0.05 </b> sugárzási tényezővel rendelkező tükörsíma alufólia majdnem 500C fokra kell hogy felmelegedjen ahhoz, hogy 1kW/m<sup>2</sup> energiát le tudjon adni!
<br>
<br>
Mindez az űrben történik: átlátszó, <b> e = 0.1 </b> sugárzási tényezővel rendelkező polietilén búrával borított fekete, közel 100% napfényelnyelő felület, mely csak a különböző anyagokból készült hátoldalán képes az elnyelt energiát  a totálhideg világűrbe  (nincs háttérsugárzás), vagy a légkörmentes  0-30C meleg háttérsugárzást biztosító bolygón leadni (áramlási és vezetési hőátadás nincsen):
 <br>
<br>
<table border="0" cellspacing="0">
<tbody>
<tr>
<td colspan="4" align="center" valign="middle" height="17"><b>Stefan-Boltzmann képlet:</b></td>
<td colspan="4" align="left">q(W) = σ T*T*T*T *  A </td>
<td align="left"> </td>
</tr>
<tr>
<td align="left" height="17">  </td>
<td colspan="4" align="left">Stefan-Boltzmann konstans  <b>σ =  </b></td>
<td colspan="2" align="center"><b>56,7 / G</b></td>
<td align="left">(W/m<sup>2</sup> K<sup>4</sup> )</td>
<td align="center"> G = 10<sup>9</sup> = 1 000 000 000  </td>
</tr>
<tr>
<td colspan="3" align="left" height="17"><b>A világűrben:</b><br /></td>
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
<td align="center">T(K):</td>
<td align="center"><b>T(C):</b></td>
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
<td align="center" bgcolor="#FFCC00">W/m<sup>2</sup> </td>
<td colspan="5" align="left" valign="middle" bgcolor="#FF9900"><b>Valós test sugárzása a +33C környezetbe</b></td>
</tr>
<tr>
<td align="center" height="17">e:</td>
<td align="center">290</td>
<td align="center"><b>17</b></td>
<td align="right">7072810000</td>
<td align="center" bgcolor="#FFFF00">401</td>
<td align="center" bgcolor="#FFCC00"> </td>
<td align="center" bgcolor="#FF9900">W/m<sup>2</sup> </td>
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
<td align="center">365</td>
<td align="center"><b>92</b></td>
<td align="right">17748900625</td>
<td align="center" bgcolor="#FFFF00">1006</td>
<td align="center" bgcolor="#FFCC00">1006</td>
<td align="center" bgcolor="#FF9900">509</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">feketetest</td>
</tr>
<tr>
<td align="center" height="17">0,9</td>
<td align="center">375</td>
<td align="center"><b>102</b></td>
<td align="right">19775390625</td>
<td align="center" bgcolor="#FFFF00">1121</td>
<td align="center" bgcolor="#FFCC00">1009</td>
<td align="center" bgcolor="#FF9900">562</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">fa, papír, üveg, építőanyagok, festékek</td>
</tr>
<tr>
<td align="center" height="17">0,5</td>
<td align="center">434</td>
<td align="center"><b>161</b></td>
<td align="right">35477982736</td>
<td align="center" bgcolor="#FFFF00">2012</td>
<td align="center" bgcolor="#FFCC00">1006</td>
<td align="center" bgcolor="#FF9900">757</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">horgany-, cink-, ezüst- és alufesték</td>
</tr>
<tr>
<td align="center" height="17">0,2</td>
<td align="center">545</td>
<td align="center"><b>272</b></td>
<td align="right">88223850625</td>
<td align="center" bgcolor="#FFFF00">5003</td>
<td align="center" bgcolor="#FFCC00">1001</td>
<td align="center" bgcolor="#FF9900">901</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">csokoládépapír</td>
</tr>
<tr>
<td align="center" height="17">0,1</td>
<td align="center">648</td>
<td align="center"><b>375</b></td>
<td align="right">176319369216</td>
<td align="center" bgcolor="#FFFF00">9998</td>
<td align="center" bgcolor="#FFCC00">1000</td>
<td align="center" bgcolor="#FF9900">950</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">alumíniumlemez, acél</td>
</tr>
<tr>
<td align="center" height="17">0,05</td>
<td align="center">771</td>
<td align="center"><b>498</b></td>
<td align="right">353360102481</td>
<td align="center" bgcolor="#FFFF00">20037</td>
<td align="center" bgcolor="#FFCC00">1002</td>
<td align="center" bgcolor="#FF9900">977</td>
<td align="center" bgcolor="#00CCFF">0</td>
<td align="left">fényes alumíniumfólia</td>
</tr>
</tbody>
</table>
 <br><br>
 A fenti táblázatban vegyük észre, hogy a 33C fok meleg feketetest hőleadása 500W/m<sup>2</sup>, 92C fokon pedig 1000W/m<sup>2</sup>. Amennyiben a feketetest egyik oldalán 1000W/m<sup>2</sup> besugárzást kap, de úgy elő és hátlapján is kisugározhat, akkor pont 33C fokra fog femelegedni ahhoz, hogy elő és hátoldalán is 500-500W/m<sup>2</sup> hőenergiát leadhasson. 
 <br>
</i>
</body>
</html>


