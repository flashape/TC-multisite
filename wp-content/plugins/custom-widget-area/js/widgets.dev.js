var wpWidgets;
(function($) {

wpWidgets = {

	init : function() {
		var rem, sidebars = $('div.widgets-sortables');

		$('#widgets-right').children('.widgets-holder-wrap').children('.sidebar-name').click(function(){
			var c = $(this).siblings('.widgets-sortables'), p = $(this).parent();
			if ( !p.hasClass('closed') ) {
				c.sortable('disable');
				p.addClass('closed');
			} else {
				p.removeClass('closed');
				c.sortable('enable').sortable('refresh');
			}
		});

		$('#widgets-left').children('.widgets-holder-wrap').children('.sidebar-name').click(function() {
			$(this).siblings('.widget-holder').parent().toggleClass('closed');
		});

		sidebars.not('#wp_inactive_widgets').each(function(){
			var h = 50, H = $(this).children('.widget').length;
			h = h + parseInt(H * 48, 10);
			$(this).css( 'minHeight', h + 'px' );
		});

		$('a.widget-action').live('click', function(){
			var css = {}, widget = $(this).closest('div.widget'), inside = widget.children('.widget-inside'), w = parseInt( widget.find('input.widget-width').val(), 10 );

			if ( inside.is(':hidden') ) {
				if ( w > 250 && inside.closest('div.widgets-sortables').length ) {
					css['width'] = w + 30 + 'px';
					if ( inside.closest('div.widget-liquid-right').length )
						css['marginLeft'] = 235 - w + 'px';
					widget.css(css);
				}
				wpWidgets.fixLabels(widget);
				inside.slideDown('fast');
			} else {
				inside.slideUp('fast', function() {
					widget.css({'width':'','marginLeft':''});
				});
			}
			return false;
		});

		$('input.widget-control-save').live('click', function(){
			wpWidgets.save( $(this).closest('div.widget'), 0, 1, 0 );
			return false;
		});

		$('a.widget-control-remove').live('click', function(){
			wpWidgets.save( $(this).closest('div.widget'), 1, 1, 0 );
			return false;
		});

		$('a.widget-control-close').live('click', function(){
			wpWidgets.close( $(this).closest('div.widget') );
			return false;
		});

		sidebars.children('.widget').each(function() {
			wpWidgets.appendTitle(this);
			if ( $('p.widget-error', this).length )
				$('a.widget-action', this).click();
		});

		$('#widget-list').children('.widget').draggable({
			connectToSortable: 'div.widgets-sortables',
			handle: '> .widget-top > .widget-title',
			distance: 2,
			helper: 'clone',
			zIndex: 5,
			containment: 'document',
			start: function(e,ui) {
				wpWidgets.fixWebkit(1);
				ui.helper.find('div.widget-description').hide();
			},
			stop: function(e,ui) {
				if ( rem )
					$(rem).hide();
				rem = '';
				wpWidgets.fixWebkit();
			}
		});

		sidebars.sortable({
			placeholder: 'widget-placeholder',
			items: '> .widget',
			handle: '> .widget-top > .widget-title',
			cursor: 'move',
			distance: 2,
			containment: 'document',
			start: function(e,ui) {
				wpWidgets.fixWebkit(1);
				ui.item.children('.widget-inside').hide();
				ui.item.css({'marginLeft':'','width':''});
			},
			stop: function(e,ui) {
				if ( ui.item.hasClass('ui-draggable') && ui.item.data('draggable') )
					ui.item.draggable('destroy');

				if ( ui.item.hasClass('deleting') ) {
					wpWidgets.save( ui.item, 1, 0, 1 ); // delete widget
					ui.item.remove();
					return;
				}

				var add = ui.item.find('input.add_new').val(),
					n = ui.item.find('input.multi_number').val(),
					id = ui.item.attr('id'),
					sb = $(this).attr('id');

				ui.item.css({'marginLeft':'','width':''});
				wpWidgets.fixWebkit();
				if ( add ) {
					if ( 'multi' == add ) {
						ui.item.html( ui.item.html().replace(/<[^<>]+>/g, function(m){ return m.replace(/__i__|%i%/g, n); }) );
						ui.item.attr( 'id', id.replace(/__i__|%i%/g, n) );
						n++;
						$('div#' + id).find('input.multi_number').val(n);
					} else if ( 'single' == add ) {
						ui.item.attr( 'id', 'new-' + id );
						rem = 'div#' + id;
					}
					wpWidgets.save( ui.item, 0, 0, 1 );
					ui.item.find('input.add_new').val('');
					ui.item.find('a.widget-action').click();
					return;
				}
				wpWidgets.saveOrder(sb);
			},
			receive: function(e,ui) {
				if ( !$(this).is(':visible') )
					$(this).sortable('cancel');
			}
		}).sortable('option', 'connectWith', 'div.widgets-sortables').parent().filter('.closed').children('.widgets-sortables').sortable('disable');

		$('#available-widgets').droppable({
			tolerance: 'pointer',
			accept: function(o){
				return $(o).parent().attr('id') != 'widget-list';
			},
			drop: function(e,ui) {
				ui.draggable.addClass('deleting');
				$('#removing-widget').hide().children('span').html('');
			},
			over: function(e,ui) {
				ui.draggable.addClass('deleting');
				$('div.widget-placeholder').hide();

				if ( ui.draggable.hasClass('ui-sortable-helper') )
					$('#removing-widget').show().children('span')
					.html( ui.draggable.find('div.widget-title').children('h4').html() );
			},
			out: function(e,ui) {
				ui.draggable.removeClass('deleting');
				$('div.widget-placeholder').show();
				$('#removing-widget').hide().children('span').html('');
			}
		});
	},

	saveOrder : function(sb) {
		if ( sb )
			$('#' + sb).closest('div.widgets-holder-wrap').find('img.ajax-feedback').css('visibility', 'visible');

		var a = {
			action: 'cwa-widgets-order',
			current_sidebar: $('#current_sidebar').val(),
			savewidgets: $('#_wpnonce_widgets').val(),
			sidebars: []
		};

		$('div.widgets-sortables').each( function() {
			a['sidebars[' + $(this).attr('id') + ']'] = $(this).sortable('toArray').join(',');
		});

		$.post( ajaxurl, a, function() {
			$('img.ajax-feedback').css('visibility', 'hidden');
		});

		this.resize();
	},

	save : function(widget, del, animate, order) {
		if( widget.find('.widget-form').length>0 ){
			//general browser bug workaroun, cloned textareas do not get their values cloned.
			widget.find('.widget-form').find('textarea').each(function(){
				$(this).text( $(this).val() );
			});
			var form = $("<form></form>").append( widget.find('.widget-form').clone() );
		}else{
			var form = widget.find('.widget-form');
		}
		 
		var sb = widget.closest('div.widgets-sortables').attr('id'), data = form.serialize(), a;

		widget = $(widget);
		$('.ajax-feedback', widget).css('visibility', 'visible');

		a = {
			action: 'save-widget',
			savewidgets: $('#_wpnonce_widgets').val(),
			sidebar: sb
		};

		if ( del )
			a['delete_widget'] = 1;

		data += '&' + $.param(a);

		$.post( ajaxurl, data, function(r){
			var id;

			if ( del ) {
				if ( !$('input.widget_number', widget).val() ) {
					id = $('input.widget-id', widget).val();
					$('#available-widgets').find('input.widget-id').each(function(){
						if ( $(this).val() == id )
							$(this).closest('div.widget').show();
					});
				}

				if ( animate ) {
					order = 0;
					widget.slideUp('fast', function(){
						$(this).remove();
						wpWidgets.saveOrder();
					});
				} else {
					widget.remove();
					wpWidgets.resize();
				}
			} else {
				$('.ajax-feedback').css('visibility', 'hidden');
				if ( r && r.length > 2 ) {
					$('div.widget-content', widget).html(r);
					wpWidgets.appendTitle(widget);
					wpWidgets.fixLabels(widget);
				}
			}
			if ( order )
				wpWidgets.saveOrder();
		});
	},

	appendTitle : function(widget) {
		var title = $('input[id*="-title"]', widget);
		if ( title = title.val() ) {
			title = title.replace(/<[^<>]+>/g, '').replace(/</g, '&lt;').replace(/>/g, '&gt;');
			$(widget).children('.widget-top').children('.widget-title').children()
				.children('.in-widget-title').html(': ' + title);
		}
	},

	resize : function() {
		$('div.widgets-sortables').not('#wp_inactive_widgets').each(function(){
			var h = 50, H = $(this).children('.widget').length;
			h = h + parseInt(H * 48, 10);
			$(this).css( 'minHeight', h + 'px' );
		});
	},

    fixWebkit : function(n) {
        n = n ? 'none' : '';
        $('body').css({
			WebkitUserSelect: n,
			KhtmlUserSelect: n
		});
    },

    fixLabels : function(widget) {
		widget.children('.widget-inside').find('label').each(function(){
			var f = $(this).attr('for');
			if ( f && f == $('input', this).attr('id') )
				$(this).removeAttr('for');
		});
	},

    close : function(widget) {
		widget.children('.widget-inside').slideUp('fast', function(){
			widget.css({'width':'','marginLeft':''});
		});
	}
};

$(document).ready(function($){ wpWidgets.init(); });

})(jQuery);

function dumpProps(obj, parent) {
   for (var i in obj) {
      if (parent) { var msg = parent + "." + i + "\n" + obj[i]; } else { var msg = i + "\n" + obj[i]; }
      if (!confirm(msg)) { return; }
      if (typeof obj[i] == "objejct") { 
         if (parent) { dumpProps(obj[i], parent + "." + i); } else { dumpProps(obj[i], i); }
      }
   }
}