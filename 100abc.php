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
<link rel="stylesheet" type="text/css" href="<?php echo $hF;?>files/main_styleC.css?1452847600" title="wsite-theme-css" />
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
		<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

<script src="http://cdn2.editmysite.com/js/site/main.js?buildTime=1234"></script><script type="tex/javascript">_W.configDomain = "www.weebly.com";</script><script type="text/javascript" src="http://cdn2.editmysite.com/js/lang/en/ftl.js?buildTime=1234"></script><script>_W.relinquish && _W.relinquish()</script>
<script type="text/javascript"><!--
	var IS_ARCHIVE = 1;
	
	(function(jQuery){
		function initFlyouts(){
			initPublishedFlyoutMenus(
				[{"id":"243965919190409502","title":"00","url":"index.php","target":""},{"id":"320306038572266107","title":"Mesék","url":"1000.php","target":""},{"id":"525475920626142848","title":"Linkek","url":"2000.php","target":""},{"id":"231168807544239272","title":"Hozzászólások","url":"3000.php","target":""},{"id":"512437228374879240","title":"Kapcsolat","url":"4000.php","target":""}],
				"320306038572266107",
				'',
				'active',
				false,
				{"navigation\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-item-wrap\"\n\t>\n\t<a href=\"{{url}}\"\n\t\t{{#target}}target=\"{{target}}\"{{\/target}}\n\t\tclass=\"wsite-menu-item\"\n\t\t{{#membership_required}}\n\t\t\tdata-membership-required=\"{{.}}\"\n\t\t{{\/membership_required}}\n\t\t>\n\t\t{{{title_html}}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n","navigation\/flyout\/list":"<div class=\"wsite-menu-wrap\" style=\"display:none\">\n\t<ul class=\"wsite-menu\">\n\t\t{{#children}}{{> navigation\/flyout\/item}}{{\/children}}\n\t<\/ul>\n<\/div>\n","navigation\/flyout\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-subitem-wrap {{#is_current}}wsite-nav-current{{\/is_current}}\"\n\t>\n\t<a href=\"{{url}}\"\n\t\t{{#target}}target=\"{{target}}\"{{\/target}}\n\t\tclass=\"wsite-menu-subitem\"\n\t\t>\n\t\t<span class=\"wsite-menu-title\">\n\t\t\t{{{title_html}}}\n\t\t<\/span>{{#has_children}}<span class=\"wsite-menu-arrow\">&gt;<\/span>{{\/has_children}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n"},
				{}
			)
		}
		if (jQuery) {
			jQuery(document).ready(function() { jQuery(initFlyouts); });
		}else{
			if (Prototype.Browser.IE) window.onload = initFlyouts;
			else document.observe('dom:loaded', initFlyouts);
		}
	})(window._W && _W.jQuery)
//-->
</script>
		
		    <div class="content-wrap">
      <div class="container">
        <div class="main-wrap"><div id='wsite-content' class='wsite-elements wsite-not-footer'>
<div id="413566340588971682"><div><style type="text/css">
	
</style><div id="element-daa25254-82a1-4f46-a487-b1da66579ec0" class="platform-element-contents">
	<div class='powr-hit-counter' label='weebly_'></div>
</div>
<div style="clear:both;"></div>

<script type="text/javascript" class="element-script">

function setupElement413566340588971682() {
	var elementRequire = require || _wAMD.require;
	elementRequire([
		'jquery',
		'underscore',
		'backbone',
		'util/platform/elements/PlatformElement',
		'util/platform/elements/PlatformElementSettings'
	], function(
		$,
		_,
		Backbone,
		PlatformElement,
		PlatformElementSettings
	) {
		var dependencies = null || [];
		var platform_element_id = "121430520745668594-1.0.1";

		if (typeof _W.loadedPlatformDependencies === 'undefined') {
			_W.loadedPlatformDependencies = [];
		}

		if (typeof _W.platformElements === 'undefined') {
			_W.platformElements = [];
		}

		if (typeof _W.platformElements[platform_element_id] === 'undefined') {
			_W.platformElements[platform_element_id] = {};
			_W.platformElements[platform_element_id].deferredObject = new $.Deferred();
			_W.platformElements[platform_element_id].deferredPromise = _W.platformElements[platform_element_id].deferredObject.promise();
		}

		if(_.intersection(_W.loadedPlatformDependencies, dependencies).length !== dependencies.length){
			_.reduce(dependencies, function(promise, nextScript){
				_W.loadedPlatformDependencies.push(nextScript);
				return promise.then(function(){
					return $.getScript(nextScript);
				});
			}, $().promise()).then(function(){
				_W.platformElements[platform_element_id].deferredObject.resolve();
			});
		}

		if (dependencies.length === 0){
			_W.platformElements[platform_element_id].deferredObject.resolve();
		}

		_W.platformElements[platform_element_id].deferredPromise.done(function(){
			var _ElementDefinition = /**
 * This is required for element rendering to be possible
 * @type {PlatformElement}
 */
(function(){
	var debug_mode = false;
	var local_mode = false;
	function debug(){
	    if(debug_mode){
		    for (var i = 0; i < arguments.length; i++) {
		        if(window.console){
		            console.log(arguments[i]);
		        }
		    }
		}    
	}
	var MyElement = PlatformElement.extend({
		initialize: function(){
            console.log("In My Element Initialize");
			//Set the label
			var label = 'weebly_'+this.site_id+'_'+this.element_id; //Set label using element id
			jQuery('#element-'+this.element_id+' div').each(function(){
                var powr_class = jQuery(this).data('class'); //Get the class
                jQuery(this).attr('label',label).addClass(powr_class);
            });

			//Write script
	        var powr_token = 'weebly_'+this.site_id;
	        var js_url = (local_mode) ? 'https://localhost:3000/powr_local.js' : '//www.powr.io/powr.js';
	        d = document;
	        var js, id = 'powr-js', ref = d.getElementsByTagName('script')[0];
	        if (!d.getElementById(id)){
	          js = d.createElement('script'); js.id = id; js.async = true;
	          js.src = js_url;
	          js.setAttribute('powr-token',powr_token);
	          js.setAttribute('external-type','weebly-integrated');
              js.setAttribute('powr-load','sync');
	          ref.parentNode.insertBefore(js, ref);
	        }
	        //Load POWR
	        if( typeof loadPowr != 'undefined' ){
		      loadPowr();	        
            }
		}		
	});
	if (debug_mode){
		if(typeof POWR_ELEMENTS == 'undefined'){
			POWR_ELEMENTS = [];
		}
		POWR_ELEMENTS.push(MyElement);
	}
	return MyElement;
})();

;

			if (typeof _ElementDefinition == 'undefined' || typeof _ElementDefinition == 'null') {
				var _ElementDefinition = PlatformElement.extend({});
			}

			var _Element = _ElementDefinition.extend({
				initialize: function() {
					// we still want to call the initialize function defined by the developer
					// however, we don't want to call it until placeholders have been replaced
					this.placeholderInterval = setInterval(function() {
						// so use setInterval to check for placeholders.
						if (this.$('.platform-element-child-placeholder').length == 0) {
							clearInterval(this.placeholderInterval);
							this.constructor.__super__.initialize.apply(this);
						}
					}.bind(this), 100);
				}
			});
			_Element.prototype.settings = new PlatformElementSettings({"user_label":"Enter a Label"});
			_Element.prototype.settings.page_element_id = "413566340588971682";
			
			_Element.prototype.element_id = "daa25254-82a1-4f46-a487-b1da66579ec0";
			_Element.prototype.user_id = "70067723";
			_Element.prototype.site_id = "390429748698876720";
			_Element.prototype.assets_path = "//marketplace.editmysite.com/elements/121430520745668594-1.0.1/assets/";
			new _Element({
				el: '#element-daa25254-82a1-4f46-a487-b1da66579ec0'
			});
		});
	});
}

if (typeof document.documentElement.appReady == 'undefined') {
	document.documentElement.appReady = 0;
}

if (document.documentElement.appReady || (window.inEditor && window.inEditor())) {
	setupElement413566340588971682();
} else if (document.createEvent && document.addEventListener) {
	document.addEventListener('appReady', setupElement413566340588971682, false);
} else {
	document.documentElement.attachEvent('onpropertychange', function(event){
		if (event.propertyName == 'appReady') {
			setupElement413566340588971682();
		}
	});
}

</script>

</div></div></div>
</div>
      </div><!-- end container -->
    </div><!-- end main-wrap -->