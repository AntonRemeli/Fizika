<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M703 Az üveg-ház hőterjedésének nyomonkövetése</title>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>
<i>

 A következőkben figyelembe vesszük a felületek valós  elnyelési és sugárzási (abszorpciós-emissziós) tulajdonságait is úgy, hogy az alábbi táblázat feketetestre megadott sugárzási értékeit 0.9 szorzóval vesszük  valós anyagok esetében (a legtöbb anyagra igaz), 0.8 szorzóval a légkör esetében
<a href="http://www.acs.org/content/acs/en/climatescience/atmosphericwarming/singlelayermodel.html" target="blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="A Single-Layer Atmosphere Model" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="A Single-Layer Atmosphere Model" /></a>, és 0.1 szorzóval a tükröző felületek esetében (ami akár 0.01 is lehet fényesre polírozott fémfelületek esetében a környezeti hősugárzás hullámhossz-energiatartományában). Továbbá a felületi hőátadás 8 és 24W/m<sup>2</sup>K bel- és kültéri tényezőjét megbontjuk a szigorúan vett sugárzási (egyik oldalról), és konvektív-légáramlásos komponensre (másik oldalról).
 
 
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

Tudjuk, hogy a háttérsugárzás NEM függ az azt alkotó tárgyak és közegek minőségétől (<a href="<?php  echo $hF;?>05/05FE06.php" target="_blank">05FE06 Az üresen kongó gömb <img style="border: 0px solid;" title="Az üresen kongó gömb " src="<?php  echo $hF;?>@/05mese.png" alt="Az üresen kongó gömb " />&nbsp</a>) , amennyiben mind EGYAZON HŐMÉRSÉKLETEN vannak: a háttérsugárzás a feketetest sugárzásával esik egybe.
<br> <br> 

A fentiek ismeretében első lépésnek az üvegfalon (sátorvásznon és konténerfalon) áthaladó hőenergiát fogjuk elemezni TÉLEN:
 <br> <br> 
Az üvegház vagy sátor belseje legyen 17 fokkal melegebb a fagyos külvilágtól  (eredő hőellenállás =1/8+1/100+1/24=12/96+1/96+4/96=17/96=1/5.65= 1 / eredő hővezetés). Hővesztesége 96W/m<sup>2</sup> lesz (négyzetméterenként egy százwattos hagyományos izzó kell a hőveszteségek pótlására) :<br>
- A belső falfelszín 12 fokkal lesz hidegebb a beltéri hőmérséklettől. Kicsi üvegfelület esetén beltér hősugárzása 400W/m<sup>2</sup> lesz 17C fokon (amiből az üveg 360W/m<sup>2</sup> sugárzást nyel el, a<sub>t</sub>=90%=0.9, 0.9*400=360), a belső 5C fokos falfelszín hősugárzása 340W/m<sup>2</sup> lesz (valóban 306=0.9*340, e<sub>t</sub>=90%=0.9 ) , így a belső falfelszín 54W/m<sup>2</sup> hőenergiát nyel el hősugárzás útján (54=360-306) , és további 42W/m<sup>2</sup>(=96-54) hőenergiát kap az alatta áramló 12 fokkal melegebb levegőtől (amiből arra következtetünk, hogy a szigorúan konvektív belső hőátadási tényező 4W/m<sup>2</sup>K = 42W/m<sup>2</sup>/12K felfelé kerekítéssel, és ugyancsak 4W/m<sup>2</sup>K szigorúan vett sugárzási belső hőátadási tényezőt veszünk lefelé kerekítéssel: 4=54/12).<br> 
- A külső falfelszín 1 fokkal lesz hidegebb a belsőtől, hővezetése 96W/m<sup>2</sup>  lesz.<br> 
- A külső falfelszín 4 fokkal melegebb a kültértől, sugárzása 335W/m<sup>2</sup> a kültérbe (valóban 301=335*0.9  a<sub>t</sub>=e<sub>t</sub>=0.9 emisszivitással számolva), a nulla fokos kültér visszasugárzása 315W/m<sup>2</sup> lesz (valóban 252 és 283 közötti 267 érték: 252=315-63=315*0.8 a<sub>t</sub>=e<sub>t</sub>=0.8 légköri emisszivitással számolva 
<a href="http://www.acs.org/content/acs/en/climatescience/atmosphericwarming/singlelayermodel.html" target="blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="A Single-Layer Atmosphere Model" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="A Single-Layer Atmosphere Model" /></a>, és 283=315-32=315*0.9 a<sub>t</sub>=e<sub>t</sub>=0.9 földfelszíni emisszivitással számolva; megjegyzés: kültérben 10% beltéri visszaverődés nincsen, a légkör minden sugárzást elnyel, a beltérben szokásos 10% reflexió helyett 10% transzparencia van ). A külső fal nettó kisugárzása 34W/m<sup>2</sup> (=301-267), a négy fokkal hidegeb levegő áramlása pedig további 62W/m<sup>2</sup> energiát vesz át a külső falfelszíntől (62=96-34) , amiből arra következtetünk, hogy a szigorúan konvektív külső hőátadási tényező 16W/m<sup>2</sup>K (=62W/m<sup>2</sup>/4K felfelé kerekítve, azért háromszorosa a beltérinek, mert kint általában és átlagosan háromszor erősebb a légáramlás). A szigorúan vett sugárzási külső hőátadási tényező 8W/m<sup>2</sup>K (=34W/m<sup>2</sup>/4K lefelé kerekítve, azért duplája a beltérinek, mert jelen van a kozmikus ablak és hideg légkör hatása, ami derült időben a legerősebb)<br> <br>

Azt látjuk, hogy egyensúlyi helyzet áll fenn, mindhárom réteg 96-96W/m<sup>2</sup> hőenergiát továbbít a hidegebb térrész felé.  

<br> <br> 

Második lépésnek az üvegfalon (sátorvásznon és konténerfalon) áthaladó hőenergiát fogjuk elemezni NYÁRON:

 <br> <br> 
Az üvegház vagy sátor belseje legyen 17 fokkal hidegebb a 34C forró éjszakától  (eredő hőellenállás =1/8+1/100+1/24=12/96+1/96+4/96=17/96=1/5.65= 1 / eredő hővezetés). Hőnyeresége 96W/m<sup>2</sup> lesz (négyzetméterenként egy százwattos hagyományos izzó melege tolakszik befelé) :<br>
- A belső falfelszín 12 fokkal lesz melegebb a beltéri hőmérséklettől. Kicsi üvegfelület esetén beltér hősugárzása 400W/m<sup>2</sup> lesz 17C fokon (amiből az üveg 360W/m<sup>2</sup> sugárzást nyel el, a<sub>t</sub>=90%=0.9, 0.9*400=360), a belső 29C fokos falfelszín hősugárzása 472W/m<sup>2</sup> lesz (valóban 425=0.9*470, e<sub>t</sub>=90%=0.9 ) , így a belső falfelszín 65W/m<sup>2</sup> hőenergiát ad le hősugárzás útján (65=425-360) , és további 31W/m<sup>2</sup>(=96-65) hőenergiát veszít az alatta áramló 12 fokkal hidegebb levegőtől (amiből arra következtetünk, hogy a szigorúan konvektív belső hőátadási tényező 3W/m<sup>2</sup>K = 31W/m<sup>2</sup>/12K felfelé kerekítéssel, és 5W/m<sup>2</sup>K szigorúan vett sugárzási belső hőátadási tényezőt veszünk lefelé kerekítéssel: 5=65/12).<br> 
- A külső falfelszín 1 fokkal lesz melegebb a belsőtől, hővezetése 96W/m<sup>2</sup>  lesz.<br> 
- A külső falfelszín 4 fokkal hidegebb a kültértől, sugárzása 478W/m<sup>2</sup> a kültérbe (valóban 430=478*0.9  a<sub>t</sub>=e<sub>t</sub>=0.9 emisszivitással számolva), a 34C fokos kültér visszasugárzása 500W/m<sup>2</sup> lesz (valóban 400 és 450 közötti 425 érték: 400=500-100=500*0.8 a<sub>t</sub>=e<sub>t</sub>=0.8 légköri emisszivitással számolva 
<a href="http://www.acs.org/content/acs/en/climatescience/atmosphericwarming/singlelayermodel.html" target="blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="A Single-Layer Atmosphere Model" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="A Single-Layer Atmosphere Model" /></a>, és 450=500-50=500*0.9 a<sub>t</sub>=e<sub>t</sub>=0.9 földfelszíni emisszivitással számolva; megjegyzés: kültérben 10% beltéri visszaverődés nincsen, a légkör minden sugárzást elnyel, a beltérben szokásos 10% reflexió helyett 10% transzparencia van ). A külső fal nettó kisugárzása 5W/m<sup>2</sup> (=430-425), a négy fokkal melegeb levegő áramlása pedig további 91W/m<sup>2</sup> energiát vesz át a külső falfelszíntől (91=96-5) , amiből arra következtetünk, hogy a szigorúan konvektív külső hőátadási tényező 23W/m<sup>2</sup>K (=91W/m<sup>2</sup>/4K felfelé kerekítve, azért háromszorosa a beltérinek, mert kint általában és átlagosan háromszor erősebb a légáramlás). A szigorúan vett sugárzási külső hőátadási tényező 1W/m<sup>2</sup>K (=5W/m<sup>2</sup>/4K lefelé kerekítve, azért töredéke a beltérinek, mert jelen van a kozmikus ablak és nyáron is hideg felső légkör hatása, ami derült időben a legerősebb)<br> <br>

Azt látjuk, hogy egyensúlyi helyzet áll fenn, mindhárom réteg 96-96W/m<sup>2</sup> hőenergiát továbbít a hidegebb térrész felé. <br> <br>

Észrevétel: a FELÜLETI HŐÁTADÁS egységes 8W/m<sup>2</sup>K beltéri és 24W/m<sup>2</sup>K kültéri feltételezése esetén (ami a valóságban lehet nagyon eltérő, 5 és 40W/m<sup>2</sup>K között változó érték), a sugárzási komponens levonása után eltérő 4 és 3W/m<sup>2</sup>K beltéri konvektív hőátadást kapunk a téli és nyári becsléssel, valamint még fokozottabban eltérő 16 és 23W/m<sup>2</sup>K kültéri konvektív hőátadást kapunk a téli és nyári becsléssel.<br>
Az ellentmondás gyakorlati feloldása céljából évszaktól független 4W/m<sup>2</sup>K beltéri és 16W/m<sup>2</sup>K kültéri konvektív (légáramlásos) hőátadást fogunk feltételezni következetesen (ami a valóságban lehet nagyon eltérő, a konkrét körülmények függvényében).

  
  </i>
</body>
</html>


