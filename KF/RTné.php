<html>
<head>
<title>ProFizika</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body>
 <table style="width: 100%;"><tbody><tr>
<td> </td><td>
<?php 
include "../../h.php";
//include "../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
//echo "  pa: ".$pa;
if (isset($_GET['pap']))				$pap = $_GET['pap'];
//echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
//echo "  par: ".$par;
//$i = "'";
//echo "  pF: ".$pF;
//echo "  hFRT: ".$hF;
//$i = "'";
//$ii = '"';
// echo "  iiiiiiRT: ".$i;
// echo "  iiiiii2: ".$ii;




$RT="<br><big>Rudolf Tamásné - ";

echo '<a href="http://31.220.111.193/Fizika/KF/RTn%C3%A9.php" >';
echo "<b>".$RT."ProFizika Oktatófilmek:<br></b></big>";
echo '</a>';



$Ytb="https://www.youtube.com/watch?v=";
$Yti="https://i.ytimg.com/vi/";
$Ytj="/hqdefault.jpg?>";


$RTa0="<br>Az anyag belső szerkezete: <br>";
$RTa1="l4-NgIZyPbg";   		$RTa1t="ProFizika Miből áll a világ? ";
$RTa2="epZ4CbrhCdg";		$RTa2t="ProFizika Erőhatás az anyag részecskéi között";
$RTa3="hcWVb-MFxp8";		$RTa3t="ProFizika Különböző anyagok, különböző tulajdonságok";


	 


 echo $RTa0;

//echo $Ytb.$RTa1;
 
$RTa1v =' <a
target="blank" href="'.$Ytb.$RTa1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTa1t.'" title="'.$RTa1t.'" src="'.$Yti.$RTa1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTa1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Miből_áll_a_világ=$RTa1v;
// echo "aaaabb".$Miből_áll_a_világ;
	 
$RTa2v =' <a
target="blank" href="'.$Ytb.$RTa2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTa2t.'" title="'.$RTa2t.'" src="'.$Yti.$RTa2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTa2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Erőhatás_az_anyag_részecskéi_között=$RTa2v;
	 
$RTa3v =' <a
target="blank" href="'.$Ytb.$RTa3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTa3t.'" title="'.$RTa3t.'" src="'.$Yti.$RTa3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTa3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Különböző_anyagok_különböző_tulajdonságok=$RTa3v;



 
 
 
 
 
 
 
$RTx0="<br> Az anyagok mérhető tulajdonságai: <br>";
$RTx1="c07F0TkRXWc";   		$RTx1t="ProFizika Mérés, mértékegység"; 
$RTx2="DJwQWyNeXW0";		$RTx2t="ProFizika Terület, térfogat és űrmérték";
$RTx3="CXzimC-nEyc";		$RTx3t="ProFizika Kerület, terület és térfogat meghatározása";
$RTx4="hWx8ZTrKnf0";   		$RTx4t="ProFizika A tömeg fogalma és mérése "; 
$RTx5="5CyfXStuZCA";		$RTx5t="ProFizika Sűrűség";


	 


 echo $RTx0;


 
$RTx1v =' <a
target="blank" href="'.$Ytb.$RTx1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTx1t.'" title="'.$RTx1t.'" src="'.$Yti.$RTx1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTx1.$Ytj.'.'.$i.')"></a>';
echo $ProFizika_Mérés_mértékegység=$RTx1v;
	 
$RTx2v =' <a
target="blank" href="'.$Ytb.$RTx2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTx2t.'" title="'.$RTx2t.'" src="'.$Yti.$RTx2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTx2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Terület_térfogat_és_űrmérték=$RTx2v;

	 
$RTx3v =' <a
target="blank" href="'.$Ytb.$RTx3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTx3t.'" title="'.$RTx3t.'" src="'.$Yti.$RTx3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTx3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Kerület_terület_és_térfogat_meghatározása=$RTx3v;


 
$RTx4v =' <a
target="blank" href="'.$Ytb.$RTx4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTx4t.'" title="'.$RTx4t.'" src="'.$Yti.$RTx4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTx4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_tömeg_fogalma_és_mérése=$RTx4v;

	 
$RTx5v =' <a
target="blank" href="'.$Ytb.$RTx5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTx5t.'" title="'.$RTx5t.'" src="'.$Yti.$RTx5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTx5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Sűrűség=$RTx5v;


 
 
 
 
 
 
 

$RTk0="<br> Kölcsönhatások: <br>";
$RTk1="0RFCo6LSeBg";   		$RTk1t="ProFizika Anyag és kölcsönhatás"; 
$RTk2="p0ZPCTV9-Ns";		$RTk2t="ProFizika Mechanikai kölcsönhatás";
$RTk3="uTM5A2-MbtA";		$RTk3t="ProFizika Termikus kölcsönhatás";
$RTk4="K-s5XvXeqBY";   		$RTk4t="ProFizika Elektromos kölcsönhatás "; 
$RTk5="ZWUV20rEf90";		$RTk5t="ProFizika Mágneses kölcsönhatás";
$RTk6="W7oIyCwY6fM";		$RTk6t="ProFizika Gravitációs kölcsönhatás";


	 


 echo $RTk0;


 
$RTk1v =' <a
target="blank" href="'.$Ytb.$RTk1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk1t.'" title="'.$RTk1t.'" src="'.$Yti.$RTk1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Anyag_és_kölcsönhatás=$RTk1v;

	 
$RTk2v =' <a
target="blank" href="'.$Ytb.$RTk2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk2t.'" title="'.$RTk2t.'" src="'.$Yti.$RTk2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Mechanikai_kölcsönhatás=$RTk2v;

	 
$RTk3v =' <a
target="blank" href="'.$Ytb.$RTk3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk3t.'" title="'.$RTk3t.'" src="'.$Yti.$RTk3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Termikus_kölcsönhatás=$RTk3v;


 
$RTk4v =' <a
target="blank" href="'.$Ytb.$RTk4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk4t.'" title="'.$RTk4t.'" src="'.$Yti.$RTk4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Elektromos_kölcsönhatás=$RTk4v;
 
 
 
 
	 
$RTk5v =' <a
target="blank" href="'.$Ytb.$RTk5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk5t.'" title="'.$RTk5t.'" src="'.$Yti.$RTk5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Mágneses_kölcsönhatás=$RTk5v;

	 
$RTk6v =' <a
target="blank" href="'.$Ytb.$RTk6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTk6t.'" title="'.$RTk6t.'" src="'.$Yti.$RTk6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTk6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Gravitációs_kölcsönhatás=$RTk6v;

 

 
  

$RTb0="<br> Mozgások: <br>";
$RTb1="8Zotj2U00Mg";   		$RTb1t="ProFizika Mozgás, pálya, út, elmozdulás"; 
$RTb2="XR1AcNeGriw";		$RTb2t="ProFizika A sebesség és mértékegységei";
$RTb3="PN9xOlDw5B8";		$RTb3t="ProFizika Az egyenes vonalú egyenletes sebességű mozgás";
$RTb4="cL_qNrffrk4";   		$RTb4t="ProFizika Feladatok az egyenletes sebességű mozgásra "; 
$RTb5="89-YM4wGhxw";		$RTb5t="ProFizika Átlagsebesség";
$RTb6="_ue48B4ZztI";		$RTb6t="ProFizika Gyorsulás";
$RTb7="x5tbITXLWq8";		$RTb7t="ProFizika Feladatok az egyenletesen gyorsuló mozgásra";
$RTb8="GUB9PNkWHdo";		$RTb8t="ProFizika Szabadesés";
$RTb9="eq0la4zG7SU";		$RTb9t="ProFizika Feladatok szabadesésre";


	 


 echo $RTb0;


 
$RTb1v =' <a
target="blank" href="'.$Ytb.$RTb1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb1t.'" title="'.$RTb1t.'" src="'.$Yti.$RTb1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Mozgás_pálya_út_elmozdulás=$RTb1v;

	 
$RTb2v =' <a
target="blank" href="'.$Ytb.$RTb2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb2t.'" title="'.$RTb2t.'" src="'.$Yti.$RTb2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_sebesség_és_mértékegységei=$RTb2v;

	 
$RTb3v =' <a
target="blank" href="'.$Ytb.$RTb3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb3t.'" title="'.$RTb3t.'" src="'.$Yti.$RTb3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_egyenes_vonalú_egyenletes_sebességű_mozgás=$RTb3v;


 
$RTb4v =' <a
target="blank" href="'.$Ytb.$RTb4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb4t.'" title="'.$RTb4t.'" src="'.$Yti.$RTb4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Feladatok_az_egyenletes_sebességű_mozgásra=$RTb4v;
 
 
 
 
	 
$RTb5v =' <a
target="blank" href="'.$Ytb.$RTb5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb5t.'" title="'.$RTb5t.'" src="'.$Yti.$RTb5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Átlagsebesség=$RTb5v;

	 
$RTb6v =' <a
target="blank" href="'.$Ytb.$RTb6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb6t.'" title="'.$RTb6t.'" src="'.$Yti.$RTb6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Gyorsulás=$RTb6v;

$RTb7v =' <a
target="blank" href="'.$Ytb.$RTb7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb7t.'" title="'.$RTb7t.'" src="'.$Yti.$RTb7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Feladatok_az_egyenletesen_gyorsuló_mozgásra=$RTb7v;

$RTb8v =' <a
target="blank" href="'.$Ytb.$RTb8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb8t.'" title="'.$RTb8t.'" src="'.$Yti.$RTb8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Szabadesés=$RTb8v;

$RTb9v =' <a
target="blank" href="'.$Ytb.$RTb9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTb9t.'" title="'.$RTb9t.'" src="'.$Yti.$RTb9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTb9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Feladatok_szabadesésre=$RTb9v;




$RTf0="<br> Erő: <br>";
$RTf1="5SPNnOhUgfI";   		$RTf1t="ProFizika Az erő fogalma"; 
$RTf2="8EyCbEpAp1U";		$RTf2t="ProFizika Az erő mérése";
$RTf3="bBRdF0Qdg10";		$RTf3t="ProFizika Több erő együttes hatása";
$RTf4="DftHAVJMTbI";   		$RTf4t="ProFizika Newton törvényei 1. "; 
$RTf5="oAV3lINZSIo";		$RTf5t="ProFizika Newton törvényei 2.";
$RTf6="V7IDmG-gPzw";		$RTf6t="ProFizika A gravitációs erő, a súlyerő és a tömeg";
$RTf7="vJJM5-bDxRk";		$RTf7t="ProFizika Kísérletek és feladatok erőre, gyorsulásra";
$RTf8="K8Bdp1fP4DQ";		$RTf8t="ProFizika Lendület";
$RTf9="0Cr1V2mwOPQ";		$RTf9t="ProFizika Súrlódás és közegellenállás 1.";
$RTfA="j0NNm1mR14E";		$RTfAt="ProFizika Súrlódás és közegellenállás 2.";


	 


 echo $RTf0;


 
$RTf1v =' <a
target="blank" href="'.$Ytb.$RTf1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf1t.'" title="'.$RTf1t.'" src="'.$Yti.$RTf1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_erő_fogalma=$RTf1v;

	 
$RTf2v =' <a
target="blank" href="'.$Ytb.$RTf2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf2t.'" title="'.$RTf2t.'" src="'.$Yti.$RTf2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_erő_mérése=$RTf2v;

	 
$RTf3v =' <a
target="blank" href="'.$Ytb.$RTf3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf3t.'" title="'.$RTf3t.'" src="'.$Yti.$RTf3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Több_erő_együttes_hatása=$RTf3v;


 
$RTf4v =' <a
target="blank" href="'.$Ytb.$RTf4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf4t.'" title="'.$RTf4t.'" src="'.$Yti.$RTf4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Newton_törvényei_1=$RTf4v;
 
 
 
 
	 
$RTf5v =' <a
target="blank" href="'.$Ytb.$RTf5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf5t.'" title="'.$RTf5t.'" src="'.$Yti.$RTf5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Newton_törvényei_2=$RTf5v;

	 
$RTf6v =' <a
target="blank" href="'.$Ytb.$RTf6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf6t.'" title="'.$RTf6t.'" src="'.$Yti.$RTf6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_gravitációs_erő_a_súlyerő_és_a_tömeg=$RTf6v;

$RTf7v =' <a
target="blank" href="'.$Ytb.$RTf7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf7t.'" title="'.$RTf7t.'" src="'.$Yti.$RTf7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Kísérletek_és_feladatok_erőre_gyorsulásra=$RTf7v;

$RTf8v =' <a
target="blank" href="'.$Ytb.$RTf8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf8t.'" title="'.$RTf8t.'" src="'.$Yti.$RTf8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Lendület=$RTf8v;

$RTf9v =' <a
target="blank" href="'.$Ytb.$RTf9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTf9t.'" title="'.$RTf9t.'" src="'.$Yti.$RTf9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTf9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Súrlódás_és_közegellenállás_1=$RTf9v;

$RTfAv =' <a
target="blank" href="'.$Ytb.$RTfA.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTfAt.'" title="'.$RTfAt.'" src="'.$Yti.$RTfA.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTfA.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Súrlódás_és_közegellenállás_2=$RTfAv;



$RTw0="<br> Munka, energia: <br>";
$RTw1="UCqgi9FikJo";   		$RTw1t="ProFizika Munkavégzés és fajtái"; 
$RTw2="Tb1XVUp3ze4";		$RTw2t="ProFizika Energia";
$RTw3="ElYqc26bCbI";		$RTw3t="ProFizika Hatásfok és teljesítmény";
$RTw4="OwTAOPeoxfY";   		$RTw4t="ProFizika A forgatónyomaték fogalma"; 
$RTw5="lffUDAkQXRM";		$RTw5t="ProFizika Számoljunk a forgatónyomatékkal!";
$RTw6="-qJrm1fxwVs";		$RTw6t="ProFizika Egyszerű gépek, emelők";
$RTw7="hvZ7NSLO9Yg";		$RTw7t="ProFizika Egyszerű gépek, lejtő";


 echo $RTw0;

 
$RTw1v =' <a
target="blank" href="'.$Ytb.$RTw1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw1t.'" title="'.$RTw1t.'" src="'.$Yti.$RTw1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Munkavégzés_és_fajtái=$RTw1v;

$RTw2v =' <a
target="blank" href="'.$Ytb.$RTw2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw2t.'" title="'.$RTw2t.'" src="'.$Yti.$RTw2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Energia=$RTw2v;

$RTw3v =' <a
target="blank" href="'.$Ytb.$RTw3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw3t.'" title="'.$RTw3t.'" src="'.$Yti.$RTw3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Hatásfok_és_teljesítmény=$RTw3v;

$RTw4v =' <a
target="blank" href="'.$Ytb.$RTw4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw4t.'" title="'.$RTw4t.'" src="'.$Yti.$RTw4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_forgatónyomaték_fogalma=$RTw4v;
 
$RTw5v =' <a
target="blank" href="'.$Ytb.$RTw5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw5t.'" title="'.$RTw5t.'" src="'.$Yti.$RTw5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Számoljunk_a_forgatónyomatékkal=$RTw5v;
 
$RTw6v =' <a
target="blank" href="'.$Ytb.$RTw6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw6t.'" title="'.$RTw6t.'" src="'.$Yti.$RTw6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Egyszerű_gépek_emelők=$RTw6v;

$RTw7v =' <a
target="blank" href="'.$Ytb.$RTw7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTw7t.'" title="'.$RTw7t.'" src="'.$Yti.$RTw7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTw7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Egyszerű_gépek_lejtő=$RTw7v;

 


$RTn0="<br> Nyomás: <br>";
$RTn1="SXlEwx8-glY";   		$RTn1t="ProFizika Nyomás"; 
$RTn2="FK61wRVd0B0";		$RTn2t="ProFizika Folyadékok nyomása";
$RTn3="tnAVo4esHJs";		$RTn3t="ProFizika Közlekedőedények, hajszálcsövek";
$RTn4="A4X3INTwnzI";   		$RTn4t="ProFizika Felhajtóerő, Archimedes törvénye"; 
$RTn5="KBlrITfstxw";		$RTn5t="ProFizika Úszás, lebegés, merülés 1.rész";
$RTn6="Esqzmja-Qbo";		$RTn6t="ProFizika Úszás, lebegés, merülés 2.rész";
$RTn7="Oxp62veB5kQ";		$RTn7t="ProFizika A légnyomás 1.rész";
$RTn8="qLlezlmnaMY";		$RTn8t="ProFizika A légnyomás 2.rész";
$RTn9="GHW8Km_63V8";		$RTn9t="ProFizika Nyomáskülönbségen alapuló eszközök";


 echo $RTn0;


 
$RTn1v =' <a
target="blank" href="'.$Ytb.$RTn1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn1t.'" title="'.$RTn1t.'" src="'.$Yti.$RTn1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Nyomás=$RTn1v;

	 
$RTn2v =' <a
target="blank" href="'.$Ytb.$RTn2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn2t.'" title="'.$RTn2t.'" src="'.$Yti.$RTn2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Folyadékok_nyomása=$RTn2v;

	 
$RTn3v =' <a
target="blank" href="'.$Ytb.$RTn3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn3t.'" title="'.$RTn3t.'" src="'.$Yti.$RTn3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Közlekedőedények_hajszálcsövek=$RTn3v;


 
$RTn4v =' <a
target="blank" href="'.$Ytb.$RTn4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn4t.'" title="'.$RTn4t.'" src="'.$Yti.$RTn4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Felhajtóerő_Archimedes_törvénye=$RTn4v;
 
 
 
 
	 
$RTn5v =' <a
target="blank" href="'.$Ytb.$RTn5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn5t.'" title="'.$RTn5t.'" src="'.$Yti.$RTn5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Úszás_lebegés_merülés_1_rész=$RTn5v;

	 
$RTn6v =' <a
target="blank" href="'.$Ytb.$RTn6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn6t.'" title="'.$RTn6t.'" src="'.$Yti.$RTn6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Úszás_lebegés_merülés_2_rész=$RTn6v;

$RTn7v =' <a
target="blank" href="'.$Ytb.$RTn7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn7t.'" title="'.$RTn7t.'" src="'.$Yti.$RTn7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_légnyomás_1_rész=$RTn7v;

$RTn8v =' <a
target="blank" href="'.$Ytb.$RTn8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn8t.'" title="'.$RTn8t.'" src="'.$Yti.$RTn8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_légnyomás_2_rész=$RTn8v;

$RTn9v =' <a
target="blank" href="'.$Ytb.$RTn9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTn9t.'" title="'.$RTn9t.'" src="'.$Yti.$RTn9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTn9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Nyomáskülönbségen_alapuló_eszközök=$RTn9v;

 
 


$RTh0="<br> Hőtan: <br>";
$RTh1="s6XxHoUKgQY";   		$RTh1t="ProFizika Az anyag belső szerkezete, hőmozgás"; 
$RTh2="UPhk-DBmnGA";		$RTh2t="ProFizika A hőenergia terjedése";
$RTh3="7zrFl-R8W3w";		$RTh3t="ProFizika Hőtágulás";
$RTh4="ZeIipnK0_1Q";   		$RTh4t="ProFizika Az anyag belső energiája, a fajhő"; 
$RTh5="_FcNErgGuFo";		$RTh5t="ProFizika A fajhővel kapcsolatos egyszerű feladatok";
$RTh6="4Qm1KOun_m0";		$RTh6t="ProFizika A hőenergia megmaradása keveréses feladatokban";
$RTh7="_r-OiYL3wmY";		$RTh7t="ProFizika Olvadás, fagyás";
$RTh8="NEhNQFtoo60";		$RTh8t="ProFizika A különleges víz";
$RTh9="zM3qqyKIwT4";		$RTh9t="ProFizika Párolgás és lecsapódás";
$RThA="R7pd14FNtus";		$RThAt="ProFizika Forrás és lecsapódás";
$RThB="XkS6QCAzRTQ";		$RThBt="ProFizika Az olvadáspont és a forráspont függ a nyomástól";
$RThC="6A3HkXd_Lps";		$RThCt="ProFizika Hőerőgépek, gőzgépek";
$RThD="UwappttEgpU";		$RThDt="ProFizika Hőerőgépek, gázgépek I. A gázgépek története";
$RThE="yX-UvdXLZDU";		$RThEt="ProFizika Hőerőgépek, gázgépek II. A gázgépek működése";


 echo $RTh0;


 
$RTh1v =' <a
target="blank" href="'.$Ytb.$RTh1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh1t.'" title="'.$RTh1t.'" src="'.$Yti.$RTh1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_anyag_belső_szerkezete_hőmozgás=$RTh1v;

	 
$RTh2v =' <a
target="blank" href="'.$Ytb.$RTh2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh2t.'" title="'.$RTh2t.'" src="'.$Yti.$RTh2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_hőenergia_terjedése=$RTh2v;

	 
$RTh3v =' <a
target="blank" href="'.$Ytb.$RTh3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh3t.'" title="'.$RTh3t.'" src="'.$Yti.$RTh3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Hőtágulás=$RTh3v;


 
$RTh4v =' <a
target="blank" href="'.$Ytb.$RTh4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh4t.'" title="'.$RTh4t.'" src="'.$Yti.$RTh4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_anyag_belső_energiája_a_fajhő=$RTh4v;
 
 $RTh5v =' <a
target="blank" href="'.$Ytb.$RTh5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh5t.'" title="'.$RTh5t.'" src="'.$Yti.$RTh5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_fajhővel_kapcsolatos_egyszerű_feladatok=$RTh5v;

	 
$RTh6v =' <a
target="blank" href="'.$Ytb.$RTh6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh6t.'" title="'.$RTh6t.'" src="'.$Yti.$RTh6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_hőenergia_megmaradása_keveréses_feladatokban=$RTh6v;

$RTh7v =' <a
target="blank" href="'.$Ytb.$RTh7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh7t.'" title="'.$RTh7t.'" src="'.$Yti.$RTh7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Olvadás_fagyás=$RTh7v;

$RTh8v =' <a
target="blank" href="'.$Ytb.$RTh8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh8t.'" title="'.$RTh8t.'" src="'.$Yti.$RTh8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_különleges_víz=$RTh8v;

$RTh9v =' <a
target="blank" href="'.$Ytb.$RTh9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTh9t.'" title="'.$RTh9t.'" src="'.$Yti.$RTh9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTh9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Párolgás_és_lecsapódás=$RTh9v;

$RThAv =' <a
target="blank" href="'.$Ytb.$RThA.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RThAt.'" title="'.$RThAt.'" src="'.$Yti.$RThA.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RThA.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Forrás_és_lecsapódás=$RThAv;

$RThBv =' <a
target="blank" href="'.$Ytb.$RThB.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RThBt.'" title="'.$RThBt.'" src="'.$Yti.$RThB.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RThB.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_olvadáspont_és_a_forráspont_függ_a_nyomástól=$RThBv;

$RThCv =' <a
target="blank" href="'.$Ytb.$RThC.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RThCt.'" title="'.$RThCt.'" src="'.$Yti.$RThC.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RThC.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Hőerőgépek_gőzgépek=$RThCv;

$RThDv =' <a
target="blank" href="'.$Ytb.$RThD.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RThDt.'" title="'.$RThDt.'" src="'.$Yti.$RThD.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RThD.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Hőerőgépek_gázgépek_I_A_gázgépek_története=$RThDv;

$RThEv =' <a
target="blank" href="'.$Ytb.$RThE.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RThEt.'" title="'.$RThEt.'" src="'.$Yti.$RThE.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RThE.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Hőerőgépek_gázgépek_II_A_gázgépek_működése=$RThEv;

 
 
 
 
 

$RTe0="<br> Elektromosság: <br>";
$RTe1="DR6Mmk_dAps";   		$RTe1t="ProFizika Elektromos alapjelenségek"; 
$RTe2="397EC-o9Glo";		$RTe2t="ProFizika Áramforrások";
$RTe3="r7yqFZ-3_ME";		$RTe3t="ProFizika Vezetők és szigetelők";
$RTe4="BqvIrCWvMFw";   		$RTe4t="ProFizika Az elektromos áramkör"; 
$RTe5="_FcNErgGuFo";		$RTe5t="ProFizika Feszültség és áramerősség";
$RTe6="Pen2YEQg45E";		$RTe6t="ProFizika Ohm törvénye";
$RTe7="QWyT2F9skW8";		$RTe7t="ProFizika Vezetékek ellenállása";
$RTe8="VlUC1cpnI14";		$RTe8t="ProFizika Soros kapcsolás";
$RTe9="pvcqq3FTKJI";		$RTe9t="ProFizika Párhuzamos kapcsolás";
$RTeA="JcTvfLLXBWw";		$RTeAt="ProFizika Elektromos munka és teljesítmény";
$RTeB="jXRpM3czL1A";		$RTeBt="ProFizika Teljesítmény soros és párhuzamos kapcsolás esetén";
$RTeC="a3vpFkTbIY8";		$RTeCt="ProFizika Az elektromos áram hőhatása";
$RTeD="AsOjSq21VrU";		$RTeDt="ProFizika Az elektromos áram kémiai hatása";
$RTeE="tuHAY607O0w";		$RTeEt="ProFizika Az elektromos áram élettani hatása";


 echo $RTe0;


 
$RTe1v =' <a
target="blank" href="'.$Ytb.$RTe1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe1t.'" title="'.$RTe1t.'" src="'.$Yti.$RTe1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Elektromos_alapjelenségek=$RTe1v;

	 
$RTe2v =' <a
target="blank" href="'.$Ytb.$RTe2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe2t.'" title="'.$RTe2t.'" src="'.$Yti.$RTe2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Áramforrások=$RTe2v;

	 
$RTe3v =' <a
target="blank" href="'.$Ytb.$RTe3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe3t.'" title="'.$RTe3t.'" src="'.$Yti.$RTe3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Vezetők_és_szigetelők=$RTe3v;


 
$RTe4v =' <a
target="blank" href="'.$Ytb.$RTe4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe4t.'" title="'.$RTe4t.'" src="'.$Yti.$RTe4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromos_áramkör=$RTe4v;
 
 $RTe5v =' <a
target="blank" href="'.$Ytb.$RTe5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe5t.'" title="'.$RTe5t.'" src="'.$Yti.$RTe5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe5.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Feszültség_és_áramerősség=$RTe5v;

	 
$RTe6v =' <a
target="blank" href="'.$Ytb.$RTe6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe6t.'" title="'.$RTe6t.'" src="'.$Yti.$RTe6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Ohm_törvénye=$RTe6v;

$RTe7v =' <a
target="blank" href="'.$Ytb.$RTe7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe7t.'" title="'.$RTe7t.'" src="'.$Yti.$RTe7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Vezetékek_ellenállása=$RTe7v;

$RTe8v =' <a
target="blank" href="'.$Ytb.$RTe8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe8t.'" title="'.$RTe8t.'" src="'.$Yti.$RTe8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Soros_kapcsolás=$RTe8v;

$RTe9v =' <a
target="blank" href="'.$Ytb.$RTe9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTe9t.'" title="'.$RTe9t.'" src="'.$Yti.$RTe9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTe9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Párhuzamos_kapcsolás=$RTe9v;

$RTeAv =' <a
target="blank" href="'.$Ytb.$RTeA.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTeAt.'" title="'.$RTeAt.'" src="'.$Yti.$RTeA.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTeA.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Elektromos_munka_és_teljesítmény=$RTeAv;

$RTeBv =' <a
target="blank" href="'.$Ytb.$RTeB.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTeBt.'" title="'.$RTeBt.'" src="'.$Yti.$RTeB.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTeB.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Teljesítmény_soros_és_párhuzamos_kapcsolás_esetén=$RTeBv;

$RTeCv =' <a
target="blank" href="'.$Ytb.$RTeC.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTeCt.'" title="'.$RTeCt.'" src="'.$Yti.$RTeC.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTeC.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromos_áram_hőhatása=$RTeCv;

$RTeDv =' <a
target="blank" href="'.$Ytb.$RTeD.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTeDt.'" title="'.$RTeDt.'" src="'.$Yti.$RTeD.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTeD.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromos_áram_kémiai_hatása=$RTeDv;

$RTeEv =' <a
target="blank" href="'.$Ytb.$RTeE.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTeEt.'" title="'.$RTeEt.'" src="'.$Yti.$RTeE.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTeE.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromos_áram_élettani_hatása=$RTeEv;

 
 
 
 

$RTm0="<br> Elektromágnesesség: <br>";
$RTm1="zBmNr-Ta4MY";   		$RTm1t="ProFizika Az elektromos áram mágneses hatása"; 
$RTm2="Z8mxLgAX22g";		$RTm2t="ProFizika Az elektromágnes";
$RTm3="tkoRkQMf4_s";		$RTm3t="ProFizika Az elektromágnes gyakorlati alkalmazásai 1.";
$RTm4="yXXUBCWnX44";   		$RTm4t="ProFizika Az elektromágnes gyakorlati alkalmazásai 2."; 
$RTm5="r_1AFBgRRy4";		$RTm5t="ProFizika Az elektromos motor";
$RTm6="RcceP1-4wzw";		$RTm6t="ProFizika Az indukció";
$RTm7="2Wig-bZsrIw";		$RTm7t="ProFizika Indukció a gyakorlatban 1.rész";
$RTm8="qsel4-UhGCk";		$RTm8t="ProFizika Indukció a gyakorlatban 2.rész";
$RTm9="PeBnbsn-gVE";		$RTm9t="ProFizika Generátorok és dinamók. Áramtermelés.";
$RTmA="WP7OmX-K1K4";		$RTmAt="ProFizika A váltakozó áram és hatásai";
$RTmB="Jnu-diy9Cyk";		$RTmBt="ProFizika A transzformátor";
$RTmC="mPM3dsZtWVE";		$RTmCt="ProFizika Áramszállítás";


 echo $RTm0;


 
$RTm1v =' <a
target="blank" href="'.$Ytb.$RTm1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm1t.'" title="'.$RTm1t.'" src="'.$Yti.$RTm1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromos_áram_mágneses_hatása=$RTm1v;

	 
$RTm2v =' <a
target="blank" href="'.$Ytb.$RTm2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm2t.'" title="'.$RTm2t.'" src="'.$Yti.$RTm2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromágnes=$RTm2v;

	 
$RTm3v =' <a
target="blank" href="'.$Ytb.$RTm3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm3t.'" title="'.$RTm3t.'" src="'.$Yti.$RTm3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromágnes_gyakorlati_alkalmazásai_1=$RTm3v;


 
$RTm4v =' <a
target="blank" href="'.$Ytb.$RTm4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm4t.'" title="'.$RTm4t.'" src="'.$Yti.$RTm4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_elektromágnes_gyakorlati_alkalmazásai_2=$RTm4v;
 
 $RTm5v =' <a
target="blank" href="'.$Ytb.$RTm5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm5t.'" title="'.$RTm5t.'" src="'.$Yti.$RTm5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm5.$Ytj.'.'.$i.')"></a>';
 echo $$ProFizika_Az_elektromos_motor=$RTm5v;

	 
$RTm6v =' <a
target="blank" href="'.$Ytb.$RTm6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm6t.'" title="'.$RTm6t.'" src="'.$Yti.$RTm6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Az_indukció=$RTm6v;

$RTm7v =' <a
target="blank" href="'.$Ytb.$RTm7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm7t.'" title="'.$RTm7t.'" src="'.$Yti.$RTm7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Indukció_a_gyakorlatban_1_rész=$RTm7v;

$RTm8v =' <a
target="blank" href="'.$Ytb.$RTm8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm8t.'" title="'.$RTm8t.'" src="'.$Yti.$RTm8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Indukció_a_gyakorlatban_2_rész=$RTm8v;

$RTm9v =' <a
target="blank" href="'.$Ytb.$RTm9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTm9t.'" title="'.$RTm9t.'" src="'.$Yti.$RTm9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTm9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Generátorok_és_dinamók_Áramtermelés=$RTm9v;

$RTmAv =' <a
target="blank" href="'.$Ytb.$RTmA.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTmAt.'" title="'.$RTmAt.'" src="'.$Yti.$RTmA.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTmA.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_váltakozó_áram_és_hatásai=$RTmAv;

$RTmBv =' <a
target="blank" href="'.$Ytb.$RTmB.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTmBt.'" title="'.$RTmBt.'" src="'.$Yti.$RTmB.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTmB.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_transzformátor=$RTmBv;

$RTmCv =' <a
target="blank" href="'.$Ytb.$RTmC.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTmCt.'" title="'.$RTmCt.'" src="'.$Yti.$RTmC.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTmC.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Áramszállítás=$RTmCv;


 



$RTo0="<br> Fénytan: <br>";
$RTo1="Ze_fEJJjE6g";   		$RTo1t="ProFizika A fény - Bevezetés 1.rész"; 
$RTo2="vJe0OY4_5Es";		$RTo2t="ProFizika A fény - Bevezetés 2.rész";
$RTo3="H3Nv106vwF4";		$RTo3t="ProFizika A fény visszaverődése, síktükör";
$RTo4="0oxzulEo05o";   		$RTo4t="ProFizika A gömbtükrök I. A domború tükör"; 
$RTo5="zS8cUcUTYGU";		$RTo5t="ProFizika A gömbtükrök II. A homorú tükör";
$RTo6="cZV5o_unrZM";		$RTo6t="ProFizika Fénytörés I. Alapok";
$RTo7="94dHH_rdb0I";		$RTo7t="ProFizika Fénytörés II. - Plánparalel lemez, prizma";
$RTo8="qLc7AUkc8_M";		$RTo8t="ProFizika Fénytörés III. Optikai lencsék";
$RTo9="cx6nN5PdBD8";		$RTo9t="ProFizika A szem";

 echo $RTo0;


 
$RTo1v =' <a
target="blank" href="'.$Ytb.$RTo1.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo1t.'" title="'.$RTo1t.'" src="'.$Yti.$RTo1.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo1.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_fény_Bevezetés_1_rész=$RTo1v;

	 
$RTo2v =' <a
target="blank" href="'.$Ytb.$RTo2.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo2t.'" title="'.$RTo2t.'" src="'.$Yti.$RTo2.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo2.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_fény_Bevezetés_2_rész=$RTo2v;

	 
$RTo3v =' <a
target="blank" href="'.$Ytb.$RTo3.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo3t.'" title="'.$RTo3t.'" src="'.$Yti.$RTo3.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo3.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_fény_visszaverődése_síktükör=$RTo3v;


 
$RTo4v =' <a
target="blank" href="'.$Ytb.$RTo4.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo4t.'" title="'.$RTo4t.'" src="'.$Yti.$RTo4.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo4.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_gömbtükrök_I_A_domború_tükör=$RTo4v;
 
 $RTo5v =' <a
target="blank" href="'.$Ytb.$RTo5.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo5t.'" title="'.$RTo5t.'" src="'.$Yti.$RTo5.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo5.$Ytj.'.'.$i.')"></a>';
 echo $$ProFizika_A_gömbtükrök_II_A_homorú_tükör=$RTo5v;

	 
$RTo6v =' <a
target="blank" href="'.$Ytb.$RTo6.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo6t.'" title="'.$RTo6t.'" src="'.$Yti.$RTo6.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo6.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Fénytörés_I_Alapok=$RTo6v;

$RTo7v =' <a
target="blank" href="'.$Ytb.$RTo7.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo7t.'" title="'.$RTo7t.'" src="'.$Yti.$RTo7.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo7.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Fénytörés_II_Plánparalel_lemez_prizma=$RTo7v;

$RTo8v =' <a
target="blank" href="'.$Ytb.$RTo8.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo8t.'" title="'.$RTo8t.'" src="'.$Yti.$RTo8.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo8.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_Fénytörés_III_Optikai_lencsék=$RTo8v;

$RTo9v =' <a
target="blank" href="'.$Ytb.$RTo9.'" ><img
style="border: 0px solid ; width: 45px; height: 35px;"
alt="'.$RTo9t.'" title="'.$RTo9t.'" src="'.$Yti.$RTo9.$Ytj.'">
<img style=" width: 15px; height: 25px;" src="'.$hF.'@/08film.jpg"
onmouseover="this.T_LEFT=true;this.T_WIDTH=500;return escape('.$i.'<img src='.$Yti.$RTo9.$Ytj.'.'.$i.')"></a>';
 echo $ProFizika_A_szem=$RTo9v;





 
?>
<br><br><br>


<!--




Pro kísérletek

K. Az anyag belső szerkezete
6gy9h6riKls	A részecskék hőmozgása
H3KjZjSV8kE	Az ólomrészecskék vonzóereje
Hth-wb8r9js	Babos mák
5jVwuagD5MY	Higanycseppek műanyag lapon
EcVg8DXBjjI	Óraüveg, víz és higany
y075ZGGvmck	Részecskegyorsító
hq5rNachkrw	Üvegpohár, higany és víz
3-fCKrFZ1TU	Zsíros és tiszta óraüveg vízzel
HATbjY0_amY	Hajszálcsövesség üveglappal
fEqE-svABK8	Kísérlet szappanhártyával
oUdyCe_x1Ow	Melyik fújja fel a másikat?
Vo8K_WmgN_k	Vizes üveglapok
HLjWSQOtGFA	Ezüst csillogás
 

K. Mérés, mértékegység
QrJ7tIW0KNw	1 köbméter levegő tömege
ciLAACN_CnM	1 liter = 1 köbdeciméter
1Wx1PrRRJhk	1 liter víz 1 kg tömegű
40lRhrBoyvA	A négyzetméter és a köbméter


K. Kölcsönhatások
EYRIPhT1ato	Mágnes két darabban
5-EsiJN40Xw	Merre van észak?
ypA4NUPYLZI	Radiátor mágnes
ZAcY7rCwscc	Elektromos erővonalak búzadarával 2.
o78YriwgUUI	Mágnesek! Sorakozó!
ZOG3mXh2coU	Elektromosság hatása a vízre
MOl_uTARAAU	A mágnes különleges környezete
N9XZsj2TR64	A patkómágnes mágneses mezője

K. Mozgások
W_Try4QSV9E	Ejtési kísérletek
Rvm8MAJgsxg	Kísérletek ejtőzsinórral
SEAIYHh-B-w	Milyen gyors?
L-fEssj3qIs	Reakcióidő mérés ejtőrúddal
uH8s1dI3Obk	Mennyi utat tesz meg a gyorsuló test?


K. Erők
f0kdIf3E1UI	Hogyan készül a sünkrumpli?
p9ce7moaFLM	Nyers tojás, főtt tojás
FAWeobkZ65Y	Segner kerék
4Q4OhFhHo1c	Tömegek gyorsítása
qLAg32i3dVA	Az erő mérése rugóval
gLcgYI092-c	Tömegek gyorsítása 2
QcqAhZ1043U	Máté gyorsít!
g-Vj_ntJLFc	Napóleon és a biztonsági öv
kFCI_w4Af_M	Diótörő - kicsit másképp
Wk9kNCVyEk8	Hátra gördülő út
ctREMVqIAbU	Tehetetlenség
foZTyETkM8s	Légpárnás járművek
jsbHJbSA6ss	Lökdösődő
iaflcy_aKCE	Szakítópróba
J27h_k4Amdc	Súlytalan tömeg
MJs-IuoLNNs	Erős kísérletek


K. Munka, energia
s4K5THze9Xc	A Lieber kísérlet


K. Nyomás
tFTQOCoHyXQ	A levegő súlya
sQz9yVY3CG4	A lufi, a négercsók és a légszivattyú
HPMDbqcAVtA	A magdeburgi féltekék
9fXzF2WfKfw	A papírzsebkendő, a higany és a víz
O-Ai0Rxex8k	A tengeralattjáró
ILIV8CoHeUE	A vas, a víz és a higany
O-lMo4N1d7Y	Alumínium és réz - vízben
VgQKBwzNzTA	Archimedesi hengerpár
OomzEqnUSaU	Cartesius búvár
yhxpFX3wMzY	Felhajtóerő különböző folyadékokban
CL0f9IaFFdY	Felhajtóerő levegőben
VTs9snZA-m4	Folyadék nyomása lyukas palackban
F6Jsz5_DrqE	Folyadékok hajszálcsövekben
KW7U5mU1qYc	Folyadékok nyomása
MhCPOcCUcbk	Három folyadék szétválasztása
CcKJz9mtidI	Három folyadékos közlekedőedény
mIlByUwVZBs	Házak alapjának szigetelése
L2So51Qbcms	Hidraulikus prés
BNvCOliLtIY	Higany és víz - közlekedőedényben
UkLwgBJuLdc	Készítsünk sűrűségmérőt!
tsyDKmCfwe0	Közlekedőedény
7ri8bIRcHBw	Liftező gyöngyök
bcQOYKKTPxU	Mekkora felhajtóerő hat azonos térfogatú, de különböző anyagú testekre?
HATbjY0_amY	Hajszálcsövesség üveglappalR
bN2L8dlrfhs	Torricelli kísérlete
Alq7BmhJq0Y	Palack összeroppantása
uSrTZwjJ4U4	Lombikbélelés lufival
-6Sfd7UQHsM	Melyik ürül ki hamarabb?
TH270uXvn88	Mennyi vizet szorít ki?
cvZXEFTyPfI	Nyomásmérés manométerrel
wJJ2dEMDKtA	Olvadás édesvízben, sós vízben
dGgw08zrjy4	Olvadás fenn és lenn
rYguCmPycrk	Pascal buzogány
SYj3kUNC8mI	Tojás és váza
bp2KfdKsPa0	Úszás, merülés olvadékban
XGz5DR9k6-k	Víz alá merítünk különböző térfogatú testeket
HPfFyrJ5cx0	Víznyomás és légnyomás
Qoe4QBLaWUU	Búvárkrumpli
3uXFAT_o3NI	Palackejtés
I37ecJaCA4E	Kétfolyadékos közlekedőedény
6b13dgBjRs0	Felhajtóerő...szabadesés közben?
mvNYyasjr1w	Bolognai üvegcseppek
8UB75XwMya4	Összebújva


K. Hőtan
CsHSIn1I5BA	A 4 ütemű Otto motor működése
VzxKTBcZVbc	A hőáramlás
6gy9h6riKls	A részecskék hőmozgása
JW5vFxYYuxw	Folyadékok hőtágulása
-zGxW17eiOE	Hőtágulás - S'Gravesande készülék
Za9eCG5vwSk	Hőtágulás emeltyűs pirométerrel
Za9eCG5vwSk	Hőtágulási kísérletek bimetal szalaggal
5Yz9tjDs2-E	Huszast melegítünk
cswMpoxQNaM	Jég olvadása nagy nyomáson
mAGMgzZBW5k	Jég, víz, gőz
QdqvJ_DPhco	Hőmérsékleti skálák
QdqvJ_DPhco	Gázok hőtágulása
MWdM2pduCkk	Porlasztó liszttel
PpItr81jsSQ	Kísérlet hővezetésre
pmgqmVUl55E	Hőlégzacskó
MTV7YnSHIgI	A belső energia növelése
aTWaCVylKTI	A szalol olvadása
rEzFnhUZREE	Fagyasztás sós jéggel
yyzt0EypOw8	A víz forrása
JFCyrchbdSU	Az 1 forintos és a lombik
fTM4LuMgpGE	A gőzkatapult
ltSuT05MVPY	Forralás hűtéssel
uSrTZwjJ4U4	Lombikbélelés lufivalR
Co7sfzwAltk	Gyurma és gumidugó kilövése kémcsőből


K. Elektromosság
bgQdY16JMv4	A grafit ellenállása
Zmb4txH6d1I	A rézgálic elektrolízise
gvv6tnvwLtk	Csilingelős kísérlet
ZAcY7rCwscc	Elektromos erővonalak búzadarával 2.
ZOG3mXh2coU	Elektromosság hatása a vízre
vlgz3aMknnQ	Folyadékok ellenállása
7i___YaA8FU	Izzó szál, izzószál
sjcEy-kClz8	Szénrudak ellenállása
voADdnNKu94	Áramvezetés szilárd anyagokban
mkvlmCqCiWk	Áramvezetés folyadékokban, levegőben
fiqZ0LqRPGQ	A leydeni palack modellje
k3WpzclrihU	Boncoljunk elemet!
h3wx3Age-BY	A hajszárító
5F79VCTsibQ	Az ívfénylámpa
m6VgnqW6rwI	Kísérletek Ohm törvényére
StIVcGHTARQ	Vezetékek ellenállása
vlM9h2zXH_U	Balázs gyújtogat
LsUypzhqWoo	Olvadó biztosítékok
 


K. Elektromágnesesség
h__XguSDRSI	A transzformátor
h745-v9cJk8	Alumínium lap és a mágnes
jeBUdoir7JQ	Hangszóró
066-vFUk2PA	Iskolai transzformátor
lswjYHdwG_Q	Elektromos mérőműszerek
AB3WywV4r2g	Oersted kísérlete
XJiuOKzWifw	Rézhinta és a patkómágnes
-sCxeLyGbS4	Villanyos forgony
h-Cbu_N2JuY	A telefon
O317xKRsnLY	Az automata biztosíték
9L5reoT1KII	A csengő
N79tE4AuxWM	A Bősze féle önindukciós kísérlet
rw8QkipgUwM	Egyenáram és váltakozó áram hatása mágnesre és vasra
O3cCji6F34U	Mozgási és nyugalmi indukció
r6kfcqOK6dQ	Kísérlet Lenz törvényére
TLJk1z1C0xQ	A távíró
U4FvRD52b6g	Ha nincs 230 V, a 4,5 V is jó!
-JUZRh8WdF4	Kísérlet a Waltenhofen ingával
Mz5oaAcI2ZM	Kísérletek elektromágnessel
TcVP4qBMffw	Kábeldob - feltekerve vagy letekerve
47MbYaEwD28	Mi legyen a mobiltöltővel?
lO9kLDt8JT8	Világítsunk és lustálkodjunk...mágnessel!
 

K. Fénytan
Jx9tbf5WYQI	Napfogyatkozás
lazPl6mZe58	Szivárványos film
AKLoNTm5KRQ	Rövidlátás és távollátás
S4qXYaCCD7k	A periszkóp
0YOi9nPdCzk	Fénytörés - elcsúszó árnyék
dnstsf6fXlY	Fénytörés - itt a pénz, hol a pénz
2Ml9-T0Oieo	Tükrös kémcső - trükkös kémcső
7s6NeIif2J0	Fénytörés - domború lencsén, homorú lencsén, prizmán
7E68QNoUe-U	A csodálatos hidrozselé
-CpRiMCsGgU	Lyukkamera
-->


<script type="text/javascript" src="../wz_tooltip.js"></script>