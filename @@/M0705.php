<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>
705 Az alufólia-ház</title>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>
<i>
Az 1mm vastag alufólia hővezetése 100kW/m<sup>2</sup>K. Beleszámítva a kültéri 16W/m<sup>2</sup>K és beltéri 4W/m<sup>2</sup>K levegőáramlásos (konvektív) hőátadásokat is 3.2W/m<sup>2</sup>K eredő hővezetést kapunk (eredő hőellenállás = belső hőátadás ellenállása + alufólia hőellenállása + külső hőátadás ellenállása =1/4+0.001/100+1/16=24/96+0.001/96+6/96=30/96=1/3.2= 1 / eredő hővezetés).
<br>
 Lényegében nem az alufólia, hanem a beltéri hőátadás határozza meg a fólia-ház hőveszteségét. <br><br>
 
Ebben az esetben a beltér felszíni hőátadása képezi a meghatározó hőgátat (a hőgát=hőellenállás a hővezetés-hőátadás reciproka: 1/4=24/96 > 1/16=6/96> 0.001/100=0/96, tőbb szigetelő réteg eredő hőellenállása az egyedi rétegellenállások összegéből adódik).
<br> <br> 
- 25C fok hőmérséklet-különbség esetén az alufólia-ház falainak hővesztesége 80W/m<sup>2</sup>K lesz, nyolcszor több, mint a 10cm nikecell szigetelés esetén, tehát 10cm nikecell nyolcszor jobb hőszigetelő az alufólia-megoldástól (ugyanakkor azt is látjuk, hogy az alufólia-ház kétszer jobban szigetel mint az üveg-ház vagy sátor). 
<br> <br>
- Dupla fóliázással  több mint megduplázódik a hőellenállás (=1/4+0.001/100+1/4+1/4+0.001/100+1/16=24/96+0/96+24/96+24/96+0/96+6/96=78/96=1/1.23), 3.2W/m<sup>2</sup>K helyett 1.2W/m<sup>2</sup>K értékre zsugorodik a hővezetés.
 <br> <br>
- Háromszoros fóliázással  megnégyszereződik a hőellenállás (=1/4+0.001/100+1/4+1/4+0.001/100+1/4+1/4+0.001/100+1/16=24/96+0/96+24/96+24/96+0/96+24/96+24/96+0/96+6/96=126/96=1/0.76), 3.2W/m<sup>2</sup>K helyett 0.76W/m<sup>2</sup>K értékre csökken a hővezetés. Ez már csak kétszer magasabb hővezetés mint a referenciának számító 10cm nikecell hővezetése.
  <br> <br>
 Már sejtjük, ötszörös fóliázás 0.42W/m<sup>2</sup>K hővezetést eredményez, ami a 10cm nikecell hővezetésével mérhető össze.
   <br> <br>
 
 A fentiekben 100%-os tükrözést és 0%-os sugárzást tételeztünk fel az alufóliára. A következőben  reális 90%-os tükrözést és 10%-os sugárzást  fogunk feltételezni:
   <br> <br>
 
 Az alufólia-sátor belseje legyen 30 fokkal melegebb a fagyos külvilágtól  (eredő hőellenállás =1/4+0.001/100+1/16=24/96+0/96+6/96=30/96=1/3.2= 1 / eredő hővezetés). Hővesztesége 96W/m<sup>2</sup> lesz (96=30*3.2) :<br>
- A belső falfelszín 24 fokkal lesz hidegebb a beltéri hőmérséklettől. Kicsi alufóliafelület esetén beltér hősugárzása 385W/m<sup>2</sup> lesz 30C fokon (amiből az alufólia 39W/m<sup>2</sup> sugárzást nyel el), a belső 6C fokos falfelszín hősugárzása 345W/m<sup>2</sup> lesz (valóban 35) , így a belső falfelszín 4W/m<sup>2</sup> (=39-35) hőenergiát nyel el hősugárzás útján, és további 96W/m<sup>2</sup> hőenergiát kap az alatta áramló 24 fokkal melegebb levegőtől (a szigorúan konvektív belső hőátadási tényező 4W/m<sup>2</sup>K, 96W/m<sup>2</sup>=24K*4W/m<sup>2</sup>K, látjuk, hogy alufólia esetében a sugárzásos hőtranszport elenyésző 3% lesz a konvektív hőátadáshoz képest).<br> 
- A külső falfelszín 0.001 fokkal lesz hidegebb a belsőtől, hővezetése 100W/m<sup>2</sup>  lesz.<br> 
- A külső falfelszín 6 fokkal melegebb a kültértől, sugárzása 345W/m<sup>2</sup> a kültérbe (valóban 35  a=e=0.1 emisszivitással számolva), a nulla fokos kültér visszasugárzása 315W/m<sup>2</sup> lesz (valóban 252 és 283 közötti 267 érték 10%-a, ami 27W/m<sup>2</sup>: 252=315-63 a=e=0.8 légköri emisszivitással számolva 
<a href="http://www.acs.org/content/acs/en/climatescience/atmosphericwarming/singlelayermodel.html" target="blank"><img style="border: 0px solid; width: 25px; height: 25px;" title="A Single-Layer Atmosphere Model" src="<?php  echo $hF;?>@/04tudomany.jpeg" alt="A Single-Layer Atmosphere Model" /></a>, és 283=315-32 a=e=0.9 földfelszíni emisszivitással számolva ). A külső fal nettó kisugárzása 35-27=8W/m<sup>2</sup>, a hat fokkal hidegeb levegő áramlása pedig további 96W/m<sup>2</sup> energiát vesz át a külső falfelszíntől (a szigorúan konvektív  16W/m<sup>2</sup>K  külső hőátadási tényezővel számolva 96W/m<sup>2</sup>=6K*16W/m<sup>2</sup>K), így a kiáramló összenergia 104W/m<sup>2</sup> lesz.<br> <br>

Azt látjuk, hogy az egyensúlyi helyzet még nem áll fenn, a felületek 100-104W/m<sup>2</sup> hőenergiát továbbítanak a hidegebb térrész felé, egy kicsit többet kifelé, amíből kifolyólag az alufólia 6C fokról 5.8C fokra fok lehülni, ahol az energiaátvitel már mindhárom rétegen 101-101-101W/m<sup>2</sup>K lesz.  
 
</i>
</body>
</html>


