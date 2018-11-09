<?php  include "../../h.php";
$_SERVER['REQUEST_URI'];
$pa = $_SERVER['REQUEST_URI'];
// echo "  pa: ". $pa;
// echo "...".$pF;

if (isset($_GET['pap']))				$pap = $_GET['pap'];
// echo "  pap: ".$pap;
if (isset($_GET['par']))				$par = $_GET['par'];
// echo "  par: ".$par;
 ?><?php   error_reporting(0);
include_once $pF . "100a.php";
?>
<style>
.wsite-background {background-image: url("http://eskipaper.com/images/cosmos-wallpaper-2.jpg") !important;background-repeat: no-repeat !important;background-position: 50% 50% !important;background-size: 110% !important;background-color: transparent !important;}
body.wsite-background {background-attachment: fixed !important;}.wsite-background.wsite-custom-background{ background-size: 110% !important}
</style>

	</head>
	<body class="tall-header-page  wsite-theme-light  wsite-page-1000"><div class="wrapper">
    <div class="cento-header">
      <div class="container"> 
        <div class="logo"><span class="wsite-logo">
<?php 
//include_once $pF . "100b.php";
?>
	<a href="">
	<span id="wsite-title"><small><small> 07FE02 Az üveg-ház  </small></small> </span>	
	</a>
</span></div>
        <label class="hamburger"><span></span></label>
      </div>
      <div class="nav-wrap">
        <div class="container">
<div class="nav desktop-nav">		
<?php 
include_once $pF . "100m.php";
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

    <div class="content-wrap">
      <div class="container">
        <div class="main-wrap"><div id='wsite-content' class='wsite-elements wsite-not-footer'>
<div><div id="838384766625544356" align="left" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><html>
<?php   include_once $pF . "07/07FE02.php";
?>	
<!-- b&#369bvc     bűbvc -->
</div>
</div></div>
</div>
      </div><!-- end container -->
    </div><!-- end main-wrap -->

  </div>
  
<?php   include_once $pF . "100a.php";
 include_once $pF . "100b.php";
include_once $pF . "100c.php";
?>
  <div class="nav mobile-nav">
<?php 
include_once $pF . "100m.php";
?>	 
  </div>
  <script type="text/javascript" src="<?php  echo $hF;?>files/theme/plugins.js"></script>
  <script type="text/javascript" src="<?php  echo $hF;?>files/theme/custom.js"></script>
	</body>
</html>
