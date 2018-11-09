<html>
<head>
<title>in</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php  
include "../../h.php";
// $_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?>
<style>
.wsite-background {background-image: url("http://blogs.discovermagazine.com/outthere/files/2014/03/StandingUpInTheMilkyWay_008_Cosmos.jpg") !important;background-repeat: no-repeat !important;background-position: 50% 50% !important;background-size: 110% !important;background-color: transparent !important;}
body.wsite-background {background-attachment: fixed !important;}.wsite-background.wsite-custom-background{ background-size: 110% !important}
</style>

	</head>
	<body class="tall-header-page  wsite-theme-light  wsite-page-1000"><div class="wrapper">
    <div class="cento-header">
      <div class="container"> 
        <div class="logo"><span class="wsite-logo">

	<a href="">
	<span id="wsite-title"><small>Fizika pofon egyszerűen	
	</a></small></span>
</span></div>
        <label class="hamburger"><span></span></label>
      </div>
      <div class="nav-wrap">
        <div class="container">
<div class="nav desktop-nav">		
<?php 
//echo "$pF ".$pF;
//include_once $pF."100m.php";
?>
</div>
        </div><!-- end .container -->
      </div><!-- end .nav-wrap -->
    </div><!-- end .header -->  

    <div class="banner-wrap wsite-background wsite-custom-background">
      <div class="container">
        <div class="banner">
          <h2></h2>
          <p></p>
        </div>
      </div><!-- end container -->
    </div><!-- end banner-wrap -->

  
  
  <div class="nav mobile-nav">
<?php 
include_once $pF . "100abc.php";
?>	 
	  <?php 
include_once $pF."100m.php";
?>
  </div>
  <script type="text/javascript" src="<?php  echo $hF;?>files/theme/plugins.js"></script>
  <script type="text/javascript" src="<?php  echo $hF;?>files/theme/custom.js"></script>
	</body>
</html>
