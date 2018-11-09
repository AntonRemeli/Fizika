<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M704 Hőtükör-bevonatú üveg-ház hőterjerdésének nyomonkövetése</title>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>
<i>



 A továbbiakban a hőtükör-bevonat hatását fogjuk elemezni:
<br> <br> 

Az üveg gyakorlatilag feketetestként nyeli el a hősugárzást (valóban a<sub>t</sub>=e<sub>t</sub>=90%, ami közel feketetest), és ugyanolyan hatékonyan ki is sugározza a hőenergiát magából. Burkoljuk azonban az üveg mindkét felületét LLumar hőtükör-fóliával (a<sub>t</sub>=e<sub>t</sub>=10%): <br> 
- a belső 5 fokos falfelszín hősugárzása 340W/m<sup>2</sup> helyett 34W/m<sup>2</sup> lesz (=340*10%), a beltér 400W/m<sup>2</sup> hősugárzásából  a fóliázott üveg csak 40W/m<sup>2</sup> energiát fog elnyelni (=400*10%), így nettó 6W/m<sup>2</sup> hősugárzást fog elnyelni (=40-34), ami 54W/m<sup>2</sup> összenergiafelvételt jelent beleszámítva a belső 12C fokkal melegebb levegőtől átvett 48W/m<sup>2</sup> hőenergiát (54=12*4+6=48+6). <br> 
- A külső falfelszín fél fokkal lesz hidegebb a belsőtől, hővezetése 50W/m<sup>2</sup>  lesz.<br> 
- A külső a kültértől 4 fokkal melegebb falfelszín  sugárzása  a kültérbe 335W/m<sup>2</sup> helyett 34W/m<sup>2</sup>, a nulla fokos kültér 315W/m<sup>2</sup> (valóban 267) visszasugárzásából 27W/m<sup>2</sup>   hőenergiát képes felvenni. Így a külső fal nettó kisugárzása 34W/m<sup>2</sup> (=301-267)  helyett  7W/m<sup>2</sup> lesz (=34-27), a négy fokkal hidegebb levegő áramlása pedig további 64W/m<sup>2</sup>(=4*16) energiát vesz át a külső falfelszíntől.
<br> <br> 

Mivel az üvegfal kevesebb energiát kap, mint amennyit lead (megbontottuk az egyensúlyi állapotot hőtükröző fólia aplikálásával), a hőtükörfóliával burkolt üveg tovább fog hülni (egy fokkal lesz hidegebb):<br> 
- a belső 4 fokos falfelszín hősugárzása 335W/m<sup>2</sup> helyett 34W/m<sup>2</sup> lesz, a beltér 400W/m<sup>2</sup>  hősugárzásából  40W/m<sup>2</sup> energiát fog elnyelni, így nettó 6W/m<sup>2</sup> hősugárzást fog elnyelni, ami 58W/m<sup>2</sup> összenergiafelvételt jelent beleszámítva a belső 13 fokkal melegebb levegőtől átvett 52W/m<sup>2</sup>  hőenergiát (58=13*4+6=52+6). <br> 
- A külső falfelszín 0.6C fokkal lesz hidegebb a belsőtől, hővezetése 60W/m<sup>2</sup>  lesz.<br> 
- A külső (a kültértől 3.4C fokkal melegebb) falfelszín sugárzása  a kültérbe 332W/m<sup>2</sup> helyett 33W/m<sup>2</sup>, a nulla fokos kültér 315W/m<sup>2</sup>  (valóban 267) visszasugárzásából 27W/m<sup>2</sup>   hőenergiát képes felvenni. Így a külső fal nettó kisugárzása 34W/m<sup>2</sup> (=301-267) helyett  6W/m<sup>2</sup> lesz (=32-27), a 3.4C fokkal hidegeb levegő áramlása pedig további 54W/m<sup>2</sup> energiát vesz át a külső falfelszíntől (60=3.4*16+6=54+6).
<br> <br>
 
Láthatjuk, hogy amíg hagyományos falfelületek esetében (e<sub>t</sub>=0.9)  a belső hőátadást 4W/m<sup>2</sup>K   sugárzási és 4W/m<sup>2</sup>K  áramlási összetevő adja, addig a külső hőátadásnál 8+16W/m<sup>2</sup>K  a sugárzási és áramlási komponens. Kétoldali hőtükör-fólia alkalmazásával (e<sub>t</sub>=0.1) az üveg-ház hővesztesége megfeleződik, és azt is rövidesen meglátjuk, hogy a belső hőtükör-fólia négyszer hatékonyabb a külsőtől.<br> <br> 

 Ennek bizonyítására először fóliázzuk be csak a külső felületet:<br> 
- a 12-1-4C fokos hőmérsékletlépcsők a beltérből a kültér felé egy fokkal fognak eltolódni 11-1-5C fokra azért, mert a külső felszín kisugárzását megfékeztük, és így az üveg melegebb lesz,<br> 
- a belső felület (az előzőleg megszerzett ismeretek birtokában)  12*(4+4)=96W/m<sup>2</sup> hőenergia felvétele helyett 11*(4+4)=88W/m<sup>2</sup> hőenergiát vesz fel,<br> 
- a külső felület (az előzőleg megszerzett ismeretek birtokában)  4*(16+8)=96W/m<sup>2</sup> hőenergia leadása helyett 5*(16+8/10)=84W/m<sup>2</sup> hőenergiát ad le (a 8W/m<sup>2</sup>K sugárzás a külső üvegfalról ennek tizedére csökken abból kifolyólag, hogy a hőtükröző fólia fokonként tízszer kevesebbet sugároz  kifelé) ,<br> 
- látjuk, hogy fennáll az egyensúly, és 96W/m<sup>2</sup> -ről 10%-kal lett kisebb az energiaveszteség a hőtükröző (és gyengén sugárzó) külső fóliának köszönhetően.
<br> <br>

 Most pedig fóliázzuk be csak a belső felületet:<br> 
- a 12-1-4C fokos hőmérsékletlépcsők a beltérből a kültér felé két fokkal fognak eltolódni 14-0.5-2.5C fokra azért, mert a belső felszín besugárzását megfékeztük, és így az üveg hidegebb lesz,<br> 
- a belső felület (az előzőleg megszerzett ismeretek birtokában)  12*(4+4)=96W/m<sup>2</sup> hőenergia felvétele helyett 14*(4+4/10)=61W/m<sup>2</sup> hőenergiát vesz fel (a 4W/m<sup>2</sup>K sugárzás a belső üvegfalra ennek tizedére csökken abból kifolyólag, hogy a hőtükröző fólia fokonként tízszer kevesebb sugárzást nyel el),<br> 
- a külső felület (az előzőleg megszerzett ismeretek birtokában)  4*(16+8)=96W/m<sup>2</sup> hőenergia leadása helyett 2.5*(16+8)=60W/m<sup>2</sup> hőenergiát ad le,<br> 
- látjuk, hogy fennáll az egyensúly, és 96W/m<sup>2</sup> -ről 40%-kal lett kisebb az energiaveszteség a belső hőtükröző fóliának köszönhetően.
<br> <br>

Tehát látjuk, hogy a belső hőtükröző bevonat négyszer hatékonyabb a külsőtől.  <br><br>

</i>
</body>
</html>


