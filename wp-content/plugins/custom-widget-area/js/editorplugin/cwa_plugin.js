(function() {
    tinymce.create('tinymce.plugins.custom_widget_area', {
        init : function(ed, url) {			
			jQuery('#cwa-dialog').dialog({
				modal:true,
				autoOpen:false,
				width:700,
				buttons: {
					"Insert":function(){
						function _rep(s){
							return escape(s);
							return s.replace(/</gi,'&lt;').replace(/>/gi,'&gt;').replace(/"/gi,'\\"');
						}
						
						ed.execCommand('mceInsertContent', false, '[custom-widget-area id="'+jQuery('#cwa-sidebar-option').val()+'"'+
						' before_title="'+_rep(jQuery('#cwa-before-title').val())+'"' +
						' after_title="'+_rep(jQuery('#cwa-after-title').val())+'"' +
						' before_widget="'+_rep(jQuery('#cwa-before-widget').val())+'"' +
						' after_widget="'+_rep(jQuery('#cwa-after-widget').val())+'"' +
						' before_sidebar="'+_rep(jQuery('#cwa-before-sidebar').val())+'"' +
						' after_sidebar="'+_rep(jQuery('#cwa-after-sidebar').val())+'"' +
						']');
						jQuery( this ).dialog( "close" );
					},
					"Cancel":function(){
						jQuery( this ).dialog( "close" );
					}
				}
			});
		
            ed.addButton('custom_widget_area', {
                title : 'Insert Widget Area',
                image : url+'/images/cwa.png',
                onclick : function() {
        			jQuery('#cwa-dialog').dialog('open');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            return {
                longname : "Widget Area In Content Shortcode",
                author : 'Alberto Lau',
                authorurl : 'http://plugins.righthere.com/',
                infourl : 'http://plugins.righthere.com/',
                version : "1.0.0"
            };
        }
    });
    tinymce.PluginManager.add('custom_widget_area', tinymce.plugins.custom_widget_area);
})();
