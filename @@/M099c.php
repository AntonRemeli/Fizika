<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>A KÖRMOZGÁS ŐFENNSÉGE</title>
<?php  
include "@.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "...".$pF;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>
És itt jön most képbe a búgócsiga meséje:
<br><br>
Bármennyire is viszonylagos az egyenesvonalú egyenletes mozgás (megfelelő koordinátarendszerből nézve bármely mozgás nyugvásnak értelmezhető), annyira egyértelműen abszolút a forgómozgás:
<br><br>
- egyenesvonalú egyenletes mozgás esetén mondhatjuk, hogy valóban mi állunk, és a világ suhan el mellettünk
<br><br>
- pörgés esetén azonban nem lehet mondani, hogy nem forgunk, és az egész világ forog körülöttünk ("forog körülöttem a világ" mondás azonban létezik), 
<br><br>
...ugyanis gondolatkísérletnek képzeljünk el egy ultrakönnyű de szupererős körhintát (tehát mi sokkal "nehezebbek" vagyunk a körhintától):
<br>
- a nyugvó körhintán semmi különöset nem érzünk, mozoghatunk kifelé vagy befelé közelítve a körhinta forgástengelyéhez,
<br>
- forgó körhintán azonban <b> F<sub>cf</sub> = m * v<sup>2</sup> / k </b>centrifugális erő "húz" minket kifelé a hintából (szerencsére ugynolyan nagyságú centripetális erő húz minket befelé a szék támlájának nyomása által). 
<br>
- a belső székbe átülve (félúton a forgástengelyhez) forgásunk jelentősen gyorsabb lesz (körlendület megmaradása:  <b>m*v * k = m*2v * k/2</b>), a kerületi sebességünk kétszer lesz nagyobb, de mivel kétszer rövidebb köröket kell befutnunk, a fordulatszám négyszer (!) lesz nagyobb, a centrifugális erő pedig <b>F<sub>cf</sub> = m * (2v)<sup>2</sup> / k/2 </b> nyolcszor (!) lesz nagyobb.
