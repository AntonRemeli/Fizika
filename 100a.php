<!DOCTYPE html>
<html>
	<head>
		<!--title>1000 - Fizika egyszerűen</title-->

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

<script type="text/javascript" src="../wz_tooltip.js"></script>
<script type="text/javascript" src="wz_tooltip.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <meta name="description" content="Physics, Fizika, Phüsik">
   <meta name="keywords" content="Physics, Fizika, Phüsik">
   <meta name='robots' content='follow, all'>
   <meta name='author' content='www.arsyline.cz'>
   <meta property='og:title' content=''>
   <meta property='og:description' content=''>
   <meta property='og:image' content=''>
  
		
		<link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" />
<link rel="stylesheet" type="text/css" href="http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234" />
<link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/social-icons.css?buildtime=1234" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="<?php  echo $hF;?>files/main_styleC.css?1452847600" title="wsite-theme-css" />
<!-- 'http://fonts.googleapis.com/css'
400. That’s an error.
The requested URL was not found on this server. That’s all we know.-->
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<link href='http://cdn1.editmysite.com/editor/fonts/Aller/font.css?2' rel='stylesheet' type='text/css' />
<link href='http://cdn1.editmysite.com/editor/fonts/Lilly/font.css?2' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<style type='text/css'>
.wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {font-family:"Lora" !important;}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {font-family:"Lora" !important;}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {font-family:"Lora" !important;}
.wsite-menu-default a {font-family:"Lora" !important;}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline {font-family:"Lora" !important;}
.wsite-headline-paragraph {font-family:"Lora" !important;}
.wsite-button-inner {}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
</style>