<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M908 Hővédő bevonatok alkalmalzása</title>
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

Mint már említettük, az űrszondák felületét nanotechnológiás kerámiagömbös hő-védő festék fedi. A mindennapi anyagok nyelvére egyszerűsítve mondhatjuk, hogy az űrszonda fémfelülete kap egy "porcelánborítást", mely:<br>
- hatékonyan visszatükrözi az előtte égő levegőpárna szúró lángjának látható és közeli infrasugárzását (gyakorlatilag a napfénnyel egyenértékű, hullámhossza 1μm, többezer fok meleg közegek kisugárzása), de<br>
- ugyancsak igen hatékonyan ki is sugározza magából a felvett energiát (a környezeti hősugárzás hullámhossza 10μm, párszáz C fok meleg felületek kisugárzása),<br>
- a "porcelánborítás" sokkal alacsonyabb hőfokon képes olyan sok hőenergiát leadni, mint amennyit a fémes felületek csak sokkal magasabb hőmérsékleten képesek kisugározni;<br>
- ugyanakkor a kerámia sokkal kevésbbé vezeti az anyag belsejébe  a felszínen elnyelt hőenergiát (a fémekkel ellentétben), különösképp akkor, ha vákuum "töltésű" kerámiagömbök alkotják a hővédő bevonatot.
 <br><br>
 
 Felvetődik a kérdés, hogy fordítva is alkalmazható-e a hővédő nanokerámia? Például ha a kerámiagömbös bevonat ilyen hatékonyan véd  a külső sugárzás általi felmelegedés ellen, vajon képes lesz-e egy konténerház vagy fémborítású gyártócsarnok, bevásárlóközpont melegét télen  megóvni a kihüléstől? Vagy klimatizált bevásárlóközpont belhőmérsékletét nyáron megóvni a külső kánikulától? <br><br>
 Az már ismert, hogy a hővédő bevonat hatékonyan visszatükrözi a nap sugárzását, a felvett hőenergiát nagyobb felmelegedés nélkül képes kisugározni (mert erre a tartományra lett optimalizálva), ami általában a fehér festékek jellemzője (csak azok nem olyan "strapabírók" mint a nanokerámiás bevonat). A feltett kérdések megválaszolásához az alábbi gondolatsor vezet: <br>
- környezeti hőmérsékleten és párszáz fokon a nanokerámia jól kisugározza és jól elnyeli a hősugarakat, tehát  a belső és külső környezeti hősugárzást NEM veri vissza, de visszaveri a napsugárzás látható és közeli infrasugárzását, <br>
- azonban, ahogy a 100C fok forró szauna sem égeti le bőrünket, de az ugyanolyan forró víz kezünket leforrázza (a víz ezerszer sűrűbb a levegőtől, amiből kifolyólag hőátadása megközelítőleg ezerszer nagyobb lehet),<br>
- az 1mm vastag vaslemez akár 100kW/m<sup>2</sup> (száz napsütés!) hőenergiát is képes lenne átvezetni az egy fokkal hűvösebb kültérbe (fémek általában százszor több hőt képesek továbbítani, mint a referenciának használt 1W/mK hővezetésű betonfal),<br>
- az 1mm vastag fémlemez páratlan hővezetése vizes közeggel való érintkezés esetén 16kW/m<sup>2</sup> (tizenhat napsütés!) hőátadási limitbe ütközik (például erősen megmarkoljuk, ugyanis testünk 99%-ban víz, de: mivel bennünk mégsem alakul ki konvektív vízáramlás, a bőrünk pedig egyben szigetelőrétegnek minősíthető, úgy a 16kW/m<sup>2</sup> hőátadás legfeljebb becsült 1kW/m<sup>2</sup> (egy napsütés!) hőátadásra csonkul minden egyes fok hőmérsékletkülönbségre, tehát egy tíz fokkal melegebb felület megérintése tízszeres napsütés teljesítményével azonos, ami már forrónak minősül, húsz fokkal melegebb víz vagy fémfelület már süt),<br>
- levegő esetén a hőátadás 16W/m<sup>2</sup>K-ben van korlátozva (hőgát!, a levegő hővezetési tényezője 0.024W/mK, azaz 24W/m<sup>2</sup>K 1mm vastag levegőréteg esetén, 2.4W/m<sup>2</sup>K 1cm=10mm vastag levegőréteg esetén, amiből 4W/m<sup>2</sup>K hőátadás lesz kisebb beltéri légáramlás rásegítésével, vagy akár 16W/m<sup>2</sup>K hőátadás lesz nagyobb kültéri légáramlás rásegítésével),<br>
- érdekességként megemlítendő, hogy  a testünktől hetven fokkal melegebb szauna levegője legfeljebb 280W/m<sup>2</sup> (=70C*4W/m<sup>2</sup>K) hőátadást eredményez. Ez egy ember-napsütés (1kW/m<sup>2</sup> napsütés nem éri az ember 1m<sup>2</sup> testfelületét minden oldalról, ezért egész testfelületre átlagolva tűző napon egyharmad napsütést kapunk), de mivel a szauna forró levegője minden oldalról süt, úgy hatása négy napsütés hőhatásával egyenértékű. <br><br>
 1mm nanokerámiás hő-védő bevonattal  1C fok hőmérsékletkülönbség esetén a hővezetés: <br>
 - 100W/m<sup>2</sup>-re korlátozódik (amennyiben hővezetési tényezője  0.1W/mK, a zománcfesték hővezetése, 100=0.1*1000),<br>
 - 10W/m<sup>2</sup>-re korlátozódik (amennyiben hővezetési tényezője 0.01W/mK, ami az aerogél tulajdonsága, 10=0.01*1000), vagy<br>
 - 1W/m<sup>2</sup>-re korlátozódik (amennyiben hővezetési tényezője valóban 0.001W/mK, 1=0.001*1000, ami nincs megmérve, csupán egy kívánság).
 <br><br>
 Összehasonlítási alap:<br>
 - 0.4W/m<sup>2</sup> 10cm nikecell hővezetése 1C fok hőmérsékletkülönbség esetén (hővezetési tényezője 0.04W/mK,  0.4=0.04*10)<br><br>
 Az utolsó két esetben a csodafesték hővezetése alacsonyabb a 16W/m<sup>2</sup> levegő hőátadásától, így a csodafesték mindenféleképpen hőgátat alkot a vaslemez és a levegő között.<br>
 A legelső esetben, amikor a hővezetési tényező  0.1W/mK körüli értékkel bír, ami általában a festékekre jellemző, az elméletileg átvezethető 100W/m<sup>2</sup> hőenergiából 16W/m<sup>2</sup> konvekciós hőátadással, és körülbelül 8W/m<sup>2</sup>  hősugárzással hagyhatja el az egy fokkal melegebb kültéri felületet. Ebben az esetben maga a felület képezi a hőgátat, mert kb. 24W/m<sup>2</sup> (=16+8) hőenergiát képes leadni, miközben az 1mm festékréteg akár 100W/m<sup>2</sup> hőt is átvezetne (most azonban csak huszonnégyet vezet, amihez csak egyharmad fokkal lesz alacsonyabb a festék külső felületének hőmérséklete a belsőtől), az 1mm vastag falú vascső még akár ezerszer többet is átvezetne (a forró víz ennyi hőenergiát nem volna képes átadni, csak a negyedét, de sugárzás (például tűz lángja a vaskályhában) már leadhatna akár 100kW/m<sup>2</sup>, azaz száz napsugárzásnyi hőenergiát is a fémlemeznek).
 

</i>
</body>
</html>


