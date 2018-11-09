<?php
$h='localhost/';
$D='241es/';
$E='42es/';
$F='Fizika/';
$path = $_SERVER['DOCUMENT_ROOT'];
//echo "  path: ".$path;
$pD = $path ."/".$D;
$pE = $path ."/".$E;
$pF = $path ."/".$F;
echo "  pF: ".$pF;
//echo"aaaaaaaaaaaaaaaDrhi";
$hD=$h.$D;
$hE=$h.$E;
$hF=$h.$F;
//echo "  hF: ".$hF;
include_once ($pF."KF/KF.php");
?>