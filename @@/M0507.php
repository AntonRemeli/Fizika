<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>M507 Különböző hőmérsékletű objektumok háttérsugárzása</title>
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

Amennyiben azonban két átellenes felületünk van, különböző hőmérsékleten (vagy egy olyan zárt gömb, melynek egy része más hőmérsékletű), akkor az eredő háttérsugárzás a hideg és a meleg felület feketetest-sugárzása között lesz, arányosan a felületek nagyságával:<br> 
- egy 17C belhőmérsékletű repülő sugárzási tere 400W/m<sup>2</sup> lesz, függetlenül attól, hogy a -3C fok hideg ablak sugárzása 300W/m<sup>2</sup> (mert a jéghideg ablak a felületek csupán 1%-át adja) ,<br> 
- azonban egy -3C belhőmérsékletű  jéghideg üveggömb sugárzási tere 300W/m<sup>2</sup> lesz (a -3C fok hideg üveg sugárzása nem is 300W/m<sup>2</sup>, hanem  270W/m<sup>2</sup>, de az átellenes üvegfelület sugárzásának 10%-át visszatükrözi, és a legvégén mégis 300W/m<sup>2</sup> sugárzás hagyja el az üvegfelületeket; megjegyzés: az üveg nem engedi át a hősugárzást, NEM ÁTLÁTSZÓ a hősugárzás számára!). 

</i>
</body>
</html>


