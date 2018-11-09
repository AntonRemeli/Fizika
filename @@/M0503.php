<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M503 Termikus egyensúly:</title>
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

Ahhoz, hogy&nbsp; a világűrben két egymással átellenes fekete
felület között termikus egyensúly lépjen fel (abszolút
vákuum, hősugárzás az egyedüli hőátadási mechanizmus), azok
hőmérséklete ki kell hogy egyenlítődjön, hogy egyenként annyi hőt
sugározzanak amennyit egyenként el is nyelnek. <br>
<br>
Amennyiben azonban egy
fekete és egy fényes fémfelület áll egymással szemben, a fényes
fémfelület hőmérséklete ugyancsak ki kell hogy egyenlítődjön a fekete
felület hőmérsékletével ahhoz, hogy 1%-os hatékonysággal
visszasugározza az 1%-os hatékonysággal elnyelt sugárzást (a
hatékonyság azonos hőmérsékletű fekete felülethez lett viszonyítva).
<br>
<br>
Valójában az elnyelés/kisugárzás páros a <b>hőhíd </b>a két átellenes
felület között bármely <b>a=e</b> értékre,kivéve az abszolút tükröző felületet ahol
<b>a=e=0</b> és <b>r=1</b>: az abszolút tükröző felület a
teljes visszaverődésnek és
nulla kisugárzásnak köszönhetően megtartja saját hőmérsékletét az
átellenes <b>a=e&gt;0</b> és <b>a=e&lt;1</b> szürke felülettel szemben
(szürke
felület kisugárzása és elnyelése definíció szerint ugyanaz bármely
hullámhosszon, ami valós felületekre nézve nem igaz).<br>
<br>
Valós anyagok sugárzási spektruma nem csak hőmérsékletfüggő, hanem
hullámhosszfüggő is egyben: <b>e = e(λ,T)</b>.
Felületek sugárzási/elnyelési
tulajdonságai mások a beeső és kimenő sugárzásra, így a szürke felület
közelítés valós anyagokra NEM is alkalmazható. Valós felületek
kétféleképpen viselkednek: a szoláris spektrum elnyelési tényezője
merőben eltér a szobahőmérsékleti hősugárzás kisugárzási tényezőjétől.<br>
<br>
Valós felületek elnyelő- és kisugárzó képessége (valamint komplemensük, a
tükrözés) nagyon eltérő lehet különböző hullámhosszakra: <br>
<br>
- így
például&nbsp; szokásos fekete felületek egyaránt jól elnyelik és
kisugározzák a szoláris&nbsp; (λ=1μm, látható és közeli
infravörös)&nbsp; és termikus&nbsp; (λ=10μm)&nbsp;
spektrumot&nbsp;&nbsp;
<b>a<sub>s</sub>=e<sub>s</sub>=0.9</b>, <b>a<sub>t</sub>=e<sub>t</sub>=0.9</b>. &nbsp;
<br>
<br>
- fehérre festett felületek gyengén nyelik el és
sugározzák ki a szoláris (λ=1μm) spektrumot: <b>a<sub>s</sub>=e<sub>s</sub>=0.1</b>,
de nagyon jól elnyelik és kisugározzák a termikus (λ=10μm)
spektrumot: <b>a<sub>t</sub>=e<sub>t</sub>=0.9</b>,&nbsp;
tehát nagyon
hatékonyan tükrözik a szoláris spektrumot:&nbsp; <b>r<sub>s</sub>=0.9</b>,
&nbsp;&nbsp; de nagyon rosszul tükrözik vissza a termikus
spektrumot: <b>r<sub>t</sub>=0.1</b>. A fehér
festék gyakorlatilag
"fekete" a hősugárzással szembe.</i><br>
<i>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br>
Az izzásig felhevített
fekete és fehér felületek közötti termikus egyensúly
fenntartásához&nbsp; a
fekete felület szoláris hullámhossztartományban (λ=1μm) fog
sugározni, az átellenes fehér felület a ráeső sugárzás 90%-át
visszatükrözi, 10%-ot elnyel majd kibocsát</i> <i>ugyanabban a
szoláris hullámhossztartományban</i>,<span style="font-style: italic;">
ugyanis az azonos felszíni hőmérséklet változatlan marad a két
különböző felület között. Amennyiben ugyanez szobahőmérsékleten indul,
úgy mindkét felület feketének minősíthető, és itt is az egyensúly
folyamatosan meg fog maradni.<br>
<i>
<br>
Ha azonban izzó fekete felszínnel indul a folyamat, a fehér pedig
szobahőmérsékleten van, a 10%-ban elnyelt szoláris (λ=1μm) spektrum
energiája 90%-os hatékonysággall lesz kisugározva a termikus (λ=10μm)
spektrumban. Ezzel is azonban az
elnyelt energia csak elenyésző hányada lesz vissza kisugározva a
Stefan-Boltzmann <b>q = σ T*T*T*T&nbsp;
F&nbsp;</b> képlettel
összhangban, ahol a kisugárzott energia a hőmérséklet negyedik
hatványával arányos, <b>σ</b>
a&nbsp;Stefan-Boltzmann állandó,
<b>F</b> a felület. <br>
<br>
Az izzó felület igen gyorsan fel fogja melegíteni a szobahőmérsékletű
felületet, létrejön a termikus egyensúly:<br>
- leggyorsabban két fekete
felület között, <br>
- tízszer lasabban fekete és fehér felület
között, <br>
- százszor lasabban két fehér felület között. &nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<br>
<br>
Fényes fémes felület&nbsp; magas <b>r<sub>s</sub>=0.9 </b>
szoláris
reflektivitással bír, tehát sugárzási és elnyelési tényezője
alacsony: <b>a<sub>s</sub>=e<sub>s</sub>=0.1</b>. Termikus
reflektivitása még egy
nagyságrenddel nagyobb,&nbsp; <b>r<sub>t</sub>=0.99</b>,&nbsp;
amiből kifolyólag termikus sugárzási és elnyelési tényezője még
alacsonyabb: &nbsp; <b>a<sub>t</sub>=e<sub>t</sub>=0.01</b>.
&nbsp;
Párhuzamos fekete és fémes felületek&nbsp; ugyancsak elérik a termikus
egyensúlyt, szoláris sugárzási tartományban hasonlóan mint a fehér
színű felületek, szobahőmérsékleten azonban százszor lasabban a fekete-
és fémfelület között,&nbsp; tízezerszer lasabban a fém- és
fémfelület között.&nbsp;&nbsp;
<br>

</i>
</body>
</html>


