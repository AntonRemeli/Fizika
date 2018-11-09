<html>
<head>
<title>M9B5</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript" src="../ajax.js">set_loading_message("Please wait while the page is opening....");</script>
<script 	src="M9B5base.js"  type="text/javascript"></script>

</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>



<table style="width: 100%;"><tbody><tr>
<td><a href="M9B4.php"><img  src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td>  
<td style="text-align: right;"><a href="M9B6.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre"  title="előre" title="előre" /> </a></td></tr></tbody></table>

<table style="width: 100%;"> <tbody> <tr> <td>
<h2><a   href="M9B5.php" >B5. Lendület, lendületmegmaradás 71  </a><a href="M9FE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Vissza a tartalomjegyzékhez" alt="Vissza a tartalomjegyzékhez" border="0" /></a></h2>   </td> <td>
<h2 style="text-align: right;"> <a href="<?php  echo $hF; ?>in/inFE.php">  <img  src="<?php  echo $hF; ?>@/00fel.jpg" title="Bevezető megnyitása lassú hálózatban" alt="Bevezető megnyitása lassú hálózatban" border="0" /></a>  <a href="<?php  echo $hF; ?>in/index.php">Fizika egyszerűen</a> </h2> </td> </tr> </tbody> </table><table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td>  </td><td>
  
  A <b>KINEMATIKA</b>/mozgástan kizárólagosan a testek mozgására szorítkozik:
  <br>
  - létezik a TÉR	és az IDŐ
  <br>
  - benne léteznek az OBJEKTUMok/testek, melyeknek van: 
  <br>
  a) HELYZETe (helykoordináta a vonatkoztatási rendszerünkben)
  <br>
  b) SEBESSÉGe (helykoordináta megváltoztatása egységnyi időben a vonatkoztatási rendszerünkben)
  <br>
  c) és GYORSULÁSa (sebesség megváltoztatása egységnyi időben a vonatkoztatási rendszerünkben, ...vonatkoztatási rendszer azért, mert abszolút tér és idő nem létezik, habár mindennapi tapasztalatunk egy földhözragadt preferált vonatkoztatási rendszert sugall: <b>Aristoteles</b> szemlélete, melyet az egyház átvett és kétezer év kellett ahhoz, hogy <b>Galilei</b> megkérdőjelezze)
  <br><br>
  A <b>DINAMIKA</b>/erőtan a testek kölcsönhatását elemzi, kimondja hogy:
  <br>
  - önmaguktól a testek maradnak úgy ahogy vannak, ez a tehetetlenség elve, 
  <br>
  - csak akkor változtatnak állapotukon, ha egy másik test HATÁSt gyakorol rájuk,
  <br>
  - a hatás kölcsönös, tehát KÖLCSÖNHATÁS, éspedig olymód, hogy a két hatás ellentétes egymással, és amennyiben egy hatásleltárt csinálunk azt láthatjuk, hogy kölcsönösen kioltják egymást (tehát a két kölcsönható testből álló zárt rendszer összesített állapota marad úgy ahogy volt, a tehetetlenség elve lényegében itt is érvényes)
  <br><br>
  Látjuk, hogy a világ leírásához nem elég az idő és a tér   négy dimenziója és benne a (mozgó)  geometriai/anyagtalan testek, azonban további négy dimenzió, az ENERGIA (anyag azaz tömeg,<b> E = m*c<sup>2</sup> </b>) és IMPULZUS (mozgásmennyiség = tömeg és sebesség szorzata, <b>I = m*v </b>) bevezetésével képesek vagyunk a világ jelenségeinek, működésének teljeskörű leírására:
  <br><br>

 
  <img src="https://en.wikipedia.org/wiki/File:Asymmetric_(PSF).svg" alt="B5. Lendület, lendületmegmaradás 71" />
  <img src=" https://upload.wikimedia.org/wikipedia/commons/f/f8/Asymmetric_%28PSF%29.svg" alt="B5. Lendület, lendületmegmaradás 71" />
  
   <br><br>
  A tér-idő SZIMMETRIÁból (a világűr bármely pontjára ráfoghatjuk, hogy az a világ közepe, és bármilyen gyorsan mozgó vonatkoztatási rendszerre ráfoghatjuk, hogy valóban ő van nyugalomban) és ANYAG létezésének feltételezéséből (megtapasztaltuk, hogy a testek tehetetlenek, aminek mértéke az anyag mennyisége, azaz a test tömege) következik, hogy 
<br>
-  az ANYAG MEGMARAD (az energia nem vész el, csak átalakul, a tömeg/energia az anyag időbeli vetülete), és 
<br>
- a test IMPULZUSA SEM VÁLTOZIK önmagától (az impulzus/mozgásmennyiség az anyag térbeli vetülete)


<span id="mM9B501"><img style="border: 0px solid;" title="SZIMMETRIAkísérlet" src="<?php  echo $hF;?>@/05mese.png" alt="SZIMMETRIAkísérlet" /></span>

<div id="M9B501"> </div>
<!-- <div id="M9B501"></div> -->


  <br><br>
  Az ENERGIA-IMPULZUSMEGMARADÁS törvénye az az alapelv, mely magába foglalja Newton három törvényét:
  <br>
  - az INERCIA (tehetetlenség) törvénye az impulzusmegmaradás következménye, tömeg a mértéke,
  <br>
  - az ERŐHATÁS az impulzus/mozgásmennyiség egységnyi időben történő megváltozásának mértéke<b> F = dI/dt </b>("d" a változás jele),
  <br>
  - a HATÁS-ELLENHATÁS a két kölcsönható test együttes impulzusának megmaradásán alapul<b> dI<sub>1</sub> + dI<sub>2</sub> = 0</b>, tehát  <b>dI<sub>1</sub> = -dI<sub>2</sub></b> .
  <br><br>
 A következő állításokat fogalmazhatjuk meg továbbá az impulzus vonatkoztatásában:
<br>
-  ugyanaz az erőhatás ugyanakkora impulzusváltozást idéz elő bármely testen, függetlenül annak tömegétől (<b> F*dt = <big><big><big>m</big></big></big> * <small>dv</small> = <small>m</small> * <big><big><big>dv</big></big></big></b>)
<br>
- zárt rendszer összimpulzusa változatlan marad az idő folyamán <b> I<sub>1</sub> + I<sub>2</sub> + I<sub>3</sub> + I<sub>4</sub> + ...  + I<sub>n</sub> = const </b>
  
  <br><br>
  HF: F-2,5,6,8
    
	<a
href="https://learningapps.org/2185033"
target="blank"><img
style="border: 0px solid ; width: 25px; height: 25px;"
alt="Newton törvényei I-II-III." title="Newton törvényei I-II-III."
src="<?php  echo $hF;?>@/04tudomany.jpeg"></a>
	<br>

	<br>
</td></tr></tbody></table><p><img style="width: 100%;" src="M9B5.jpeg" title=" "  alt="B5. Lendület, lendületmegmaradás 71" /></p>

<img src="https://dbimg.eu/i/3rvapwtg.png" alt="B5. Lendület, lendületmegmaradás 71" />

<table style="width: 100%;"><tbody><tr>
<td><a href="M9B4.php"><img  src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" title="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="M9B6.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre"  title="előre" /> </a></td>
</tr></tbody></table>

<?php  include_once($pF . "100abc.php");?>

 
</body>
</html>