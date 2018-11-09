<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M907 Hővezetés számítások</title>
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
 
 A hő-továbbítási mechanizmusok összetettsége ellenére a korszerű hőszigetelő anyagok továbbra is a három jól ismert makroszkópikus paraméterrel jellemezhetők: <br>
 - a térfogati hővezetés a sok belső folyamat eredője, beleszámítva a Knudsen-effektust is,<br>
 - a felületi hősugárzás a szigurúan vett felszín és még néhány száz alatta lévő atomréteg produktuma,<br>
 - a konvektív hőátadás a felszínnel határos másik közeg és a felszín tulajdonságaiból  vezethető le.<br><br>
 
 Igy például 1m vastag betonfal hővezetése 1W/m<sup>2</sup> 1C fok hőmérsékletkülönbség esetén, 10cm  betonfal hővezetése 10W/m<sup>2</sup>, 1cm betonfal hővezetése 100W/m<sup>2</sup>, 1mm pedig 1000W/m<sup>2</sup> hőt fog átvezetni   1C fok hőmérsékletkülönbség esetén.<br><br>
 
 Amennyiben a fal 1C fokkal hidegebb levegővel érintkezik, akkor az 1cm és 1mm is csak 16+8W/m<sup>2</sup> hőt fog leadni környezetének (mert a konvektív hőátadási tényező 16W/m<sup>2</sup>K kültéri levegő esetén, a hösugárzás pedig 8W/m<sup>2</sup>K kültérben, észrevétel: a álevegőramlásos, konvektív hőátadás közel százszor nagyobb volna víz esetén), az 1m és 10cm fal  továbbra is csak 1 és 10W/m<sup>2</sup> hőt fog továbbítani, függetlenül attól, hogy a hőátadás 16+8W/m<sup>2</sup> lehetne az 1C fokkal hidegebb levegő felé (csak nem jön át annyi energia a fal külső felületéig).<br><br>
 
 Általában a jól szigetelő fal külső felszínének hőmérséklete közel megegyezik a kültér hőmérsékletével, így jelentősebb konvektív hőátadás nem  is lép fel és közel egyensúlyban lesznek a kimenő és az elnyelt hősugárzás is.<br><br>
 
 Amennyiben azonban a fal vagy nagyon vékony, vagy nagyon jól vezeti a hőt (fémek),  akkor  külső felülete  közel azonos hőmérsékleen lesz mint a belső, és meghatározó szerephez jut  a jelentősen hidegebb (vagy melegebb) környezet felé történő konvektív hőátadás és nettó sugárzás. Ilyen esetekben a "hőszigetelő csodafesték" valóban csodákra képes (de nem többre a hagyományos "bundás" hőszigeteléstől).<br><br>
 
 1C hőmérsékletkülönbség esetén:<br>
 
 - 1mm "vékonybevonat" beton hővezetése 1000W/m<sup>2</sup>, <br>
 - 1mm nikecell és kőzetgyapot hővezetése csak 40W/m<sup>2</sup>, <br>
 - 1mm aerogél hővezetése 10W/m<sup>2</sup> (hővezetési tényezőjét azért lehetett megmérni, mert az aerogél több centiméteres vastagságban is létezik, a hővezetés mérése pedig 1cm felett már lehetséges), <br>
 - 1mm nanotechnológiás hő-védő vékonybevonat hővezetése esetleg akár 1W/m<sup>2</sup> (azaz 0.001W/mK hővezetési tényező, ami azonban nem lett megmérve, mert a hővezetés mérése  1cm anyagvastagság alatt nem lehetséges).<br><br>
 
 Mind a négy esetben, azonos símaságú felszínt feltételezve a konvektív hőátadás a külső 1C fokkal hidegebb légtérbe 16W/m<sup>2</sup> volna, így az első két esetben a felszín-levegő volna a hőgát aminek következtében a hővezetés már nem lesz 1000 és 40W/m<sup>2</sup>, hanem 16+8W/m<sup>2</sup>, a másik két esetben pedig az aerogél és a kerámiagömbök képeznék a hőgátat  a felszín-levegő 
 16+8W/m<sup>2</sup> hőátadásához képest, az utóbbit 10 és 1W/m<sup>2</sup> -re mérsékelve (amennyiben igaz, hogy hővezetési tényezője 0.001W/mK ) .<br><br>
 
 Ilyen értelemben mondhatjuk azt is, hogy a hőszigetelő csodafestékek megközelítőleg 2W/m<sup>2</sup>K hőátadási tényezővel rendelkezhetnek (fél milliméter vastag csodafesték hővezetése volna 2W/m<sup>2</sup>K amennyiben 0.001W/mK hővezetési tényezővel rendelkezne ), ami mindenféleképpen jelentős nyereség lehetne a belső felületek 4W/m<sup>2</sup>K és külső falfelületek 16W/m<sup>2</sup>K  légáramlásos (konvektív) hőátadásához képest. <br><br>
 
 Amennyiben azonban a már megszokottnak mondható 10cm nikecell szigetelés megvan, annak hővezetése 0.4W/m<sup>2</sup>K, és így a csodafesték állítólagos 2W/m<sup>2</sup>K  "hő-védése" egy nagyságrenddel alulmarad. <br><br>
 
 Hagyományos fél méter vastag 1W/m<sup>2</sup>K hővezetéssel bíró téglafal esetében a hőszigetelő nanofesték 2W/m<sup>2</sup>K hőátadása már jelent valamit, úgy alkalmazása a belső falak bevonásával, de különösen a külső napsütötte falak fedésével határozott javulást eredményez(het) az épület energiaháztartásában (a "het" azért van, mert a 0.001W/mK hővezetési tényező nem lett megmérve, a 2W/m<sup>2</sup>K hőátadást csak egy orosz intézmény mérte, független bizonyítást nem kapott).<br><br>
 
 A nanokerámiás fehér bevonat igen hatékonyan tükrözi vissza a nap sugárzását, és amennyiben némileg fel is melegedett, igen hatékonyan ki tudja sugározni magából a hőt. A fehér borítás a nap hősugarait (1μm) hatékonyan visszaveri, azonban a környezeti hősugárzást (10μm) a kerámiagömbös nanofesték SEM tükrözi vissza.  Az üveg  átengedi a nap látható és hősugárzását (semmit sem tükröz vissza),  és elnyeli a környezeti hősugárzást, majd hőmérséklete fügvényében ki is sugározza az elnyelt energiát (ez az üvegház-hatás). <br><br>
 
 Téves állítás, hogy a kerámiagömbös nanofesték hatékonyan visszatükrözi a hősugárzást, pontosítani kell: hatékonyan visszatükrözi a nap fény-sugárzását, de a szoba környezeti hősugárzását NEM tükrözi vissza ahogy azt a belső sugárzásszabályozó rendszerek teszik (az alufóliaborítás):  a kerámiagömbös nanofesték a környezeti hősugárzást hatékonyan elnyeli, és ugyanolyan hatékonyan ki is sugározza (nem gátolja a környezeti hősugárzás terjedését mint az alufólia).
 
 
 </i><br>
<table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>
 <a href="<?php  echo $hF;?>09/09FE07.php" target="_blank"> &nbsp</a></td>
 <td align="right"><a href="<?php  echo $hF;?>in/index.php" >&nbsp;</a>
 <a href="javascript:void(0)" onclick="open_url('../00.php','09FE07');">
 <img src="<?php  echo $hF;?>@/05mesBe.png"
alt="Mesét becsukom" title="Mesét becsukom" align="right" border="0" ></a> <br></td></tr></tbody></table>
<br>
<br>
</i>
</body>
</html>


