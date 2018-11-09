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