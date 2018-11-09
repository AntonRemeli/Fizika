		<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

<script src="http://cdn2.editmysite.com/js/site/main.js?buildTime=1234"></script><script type="text/javascript">_W.configDomain = "www.weebly.com";</script><script type="text/javascript" src="http://cdn2.editmysite.com/js/lang/en/ftl.js?buildTime=1234"></script><script>_W.relinquish && _W.relinquish()</script>
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
		