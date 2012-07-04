/*
 * Menu Management Enhancer for WordPress
 * Copyright 2011 Chris Mavricos, SevenSpark
 * http://sevenspark.com
 */

;(function($) {

	$.menuManagementEnhancer = function(el, options) {

		var defaults = {}
		var plugin = this;
		plugin.settings = {}

		var init = function() {

			//plugin.settings = $.extend({}, defaults, options);

			plugin.el = el;

			plugin.$menu = $(el);
			plugin.$menuItems = plugin.$menu.find('li.menu-item');

			//Add Enhancers to all the items
			plugin.$menuItems.each(function(){
				enhance_item($(this));
			});
			
			/*
			 * Handle menu changes
			 */

			//Dragging and Dropping
			plugin.x = 0;
			plugin.y = 0;
			plugin.primed = false;
            
			//Drag
			plugin.$menuItems.live('mousedown', function(e){
				plugin.x = e.clientX;
				plugin.y = e.clientY;
				$(this).bind('mousemove.wpmme', function(e2){
					if(!plugin.primed && (Math.abs(e2.clientX - plugin.x) > 15 || Math.abs(e2.clientY - plugin.y) > 20)){
						plugin.primed = true;
					}
				});
			});
			
			//Drop
			plugin.$menuItems.live('mouseup', function(e){
				$(this).unbind('mousemove.wpmme');
				if(!plugin.primed) return;
				
				setTimeout(function(){ refresh(); }, 200);
				plugin.primed = false;
			});
			
			//Adding New Menu Items
			plugin.itemcount = 0;
			
			//When the user clicks the 'Add Item' button
			$('.submit-add-to-menu').click(function(){
				//listen for new menu item (waiting for AJAX response)
				plugin.itemcount = plugin.$menuItems.size();	//$('#menu-to-edit li.menu-item')
				listen_for_new_item();
			});
			
			//Item Deleted
            $('.item-delete').click(function(){
				setTimeout(function(){ refresh(); }, 500);
			});
            
            //Item Expanded
            $('.item-edit, .wpmega-showhide-menu-ops').click(function(e){	
		
				$item = $(this).parents('li.menu-item');
				
				$items = $item
						.prevUntil('li.menu-item-depth-0', 'li.menu-item').andSelf()
						.prev('li.menu-item-depth-0').andSelf();		
				
				setTimeout(function(){
					$items.each(function(k, li){
						draw_highlights($(li), get_children($(li)));
					});
				}, 500);
			});
			
			
			/*
			 * Add Sausage Links
			 */
            
			$(window).wpmme_sausage({
				page: 'li.menu-item-depth-0',
				content: function (i, $page) {
					return '<div class="sausage-span">'
							+ '<strong>'+$page.find('.item-title').text() + '</strong><br/>#'
							+ $page.attr('id')
							+ '</div>';
				}
			});

		}
        
		var enhance_item = function($item){

			//Check for enhancer
			var $enhancer = $item.find('.wpmme-enhancer');
			if($enhancer.size() == 0){
				//Create the enhancer
				$enhancer = create_enhancer($item);
			}
        	
			var $kids = get_children($item);
        	
			var numkids = $kids.filter('.menu-item-depth-'+(get_depth($item)+1)).size();
			var numdesc = $kids.size();
				
			if($enhancer.hasClass('wpmme-enhancer-'+numkids)){
				//Nothing has changed
				return;
			}
				
			$enhancer.removeClass();
			$enhancer.addClass('wpmme-enhancer');
			$enhancer.addClass('wpmme-enhancer-'+numkids);
								
			$enhancer.find('.wpmme-children')
				.text(numkids)
				.attr('title', numkids+' children\n'+numdesc+' total descendants');
				
			draw_highlights($item, $kids);			
			        	
        }
        
		var create_enhancer = function($item){
			var enhancer_html = 
				'<span class="wpmme-enhancer">'+
					'<span class="wpmme-expando" title="Expand/Contract">&ndash;</span> '+
					'<span class="wpmme-memo">'+
						'<span class="wpmme-children" title="">'+
						'</span> '+
					'</span> '+
					'<span class="wpmme-highlight-toggle"></span>'+
				'</span>';
				
			$item.find('.menu-item-handle').append('<span class="wpmme-item-id">#'+$item.attr('id')+'</span>');
		
			var $enhancer = $(enhancer_html);
			
			$item.find('> .menu-item-bar').append($enhancer);
				
			$enhancer.click(function(){
				//Expand
				if($item.hasClass('wpmme-contracted')){
					toggle_expand($item);
				}
				//Contract
				else{
					toggle_contract($item);
				}
				
			});
			
			return $enhancer;
        }
        
		var toggle_expand = function($item){
        	
			var $children = get_children($item);
        	
			var kidsleft = $children.size();
			$children.slideDown(function(){
				kidsleft--;
				if(kidsleft == 0){
					$(window).wpmme_sausage('draw');
				}
			});
			$item.toggleClass('wpmme-contracted');
			$item.find('.wpmme-expando').html('&ndash;');
			
        }
        
		var toggle_contract = function($item){
        	
			var $children = get_children($item);
        	
			var kidsleft = $children.size();
			$children.slideUp('normal', function(){
				kidsleft--;
				if(kidsleft == 0){
					$(window).wpmme_sausage('draw');
				}
			});
			$children.removeClass('wpmme-contracted').find('.wpmme-expando').html('&ndash;');	//Everything will be expanded
			$item.toggleClass('wpmme-contracted');
			$item.find('.wpmme-expando').text('+');
			
        }
        
		var get_children = function($item){

			var depth = get_depth($item);

			var selector = '';

			while(depth >= 0){
				selector +=  '.menu-item-depth-'+depth;
				if(depth > 0) selector+= ', ';
				depth--;
			}			

			return $item.nextUntil(selector);

        }

		var get_depth = function($item){

			var depth = 0;
			if($item.hasClass('menu-item-depth-0')) depth = 0;
			else if($item.hasClass('menu-item-depth-1')) depth = 1;
			else if($item.hasClass('menu-item-depth-2')) depth = 2;
			else if($item.hasClass('menu-item-depth-3')) depth = 3;
			else if($item.hasClass('menu-item-depth-4')) depth = 4;
			else if($item.hasClass('menu-item-depth-5')) depth = 5;
			else if($item.hasClass('menu-item-depth-6')) depth = 6;
			else if($item.hasClass('menu-item-depth-7')) depth = 7;
			else if($item.hasClass('menu-item-depth-8')) depth = 8;
			
			return depth;
		}
        
        var draw_highlights = function($item, $kids){
			var $highlight = $item.find('.wpmme-highlight');
		
			var top = $item.position().top;
			var height = $item.outerHeight() + 15;
			
			var $last = $kids.last();
			if($last.size() > 0){
				var bottom = $last.position().top + $last.outerHeight();
				height = bottom - top + 15;
			}
		
			if($highlight.size() > 0){
				$highlight.css({
					'height': height+'px'			
				});
			}
			else{
				$highlight = $('<div class="wpmme-highlight">');

				$highlight.css({
					'top'	: '-10px',
					'height': height+'px'
				});
				$highlight.hide();
				$item.append($highlight);
				
				$item.find('.wpmme-highlight-toggle').hover(function(){
					$highlight.fadeIn('fast');
				}, function(){
					$highlight.fadeOut('fast');
				});
			}
		}
		
		var refresh = function(){
			plugin.$menuItems.each(function(){ enhance_item($(this)); });
			$(window).wpmme_sausage('draw');
		};
		
		function listen_for_new_item(){
			var $itemGroup = $('#menu-to-edit li.menu-item');
			var newcount = $itemGroup.size();
						
			if(newcount > plugin.itemcount){	
				plugin.itemcount = newcount;
				plugin.$menuItems = $itemGroup;
				refresh();
				return;
			}
			 		
			setTimeout(function(){ 
				listen_for_new_item();
			}, 500);
		}
		
		plugin.refreshHighlights = function(){
			plugin.$menuItems.each(function(k, li){
				draw_highlights($(li), get_children($(li)));
			});
		}
		
		plugin.contractAll = function(){
			
			var $top = plugin.$menu.find('.menu-item-depth-0');
			
			var $items = plugin.$menu.find('.menu-item:not(.menu-item-depth-0)');
			var numitems = $items.size();
			$items.slideUp('fast', function(){
				if(--numitems == 0){
					$top.addClass('wpmme-contracted').find('.wpmme-expando').text('+');
					refresh();
				} 
			});
			
			refresh();
			
		}
		
		plugin.expandAll = function(){			
			var $items = plugin.$menu.find('.menu-item:not(.menu-item-depth-0)');
			var numitems = $items.size();
			$items.slideDown('fast', function(){				
				if(--numitems == 0){
					plugin.$menuItems.removeClass('wpmme-contracted').find('.wpmme-expando').html('&ndash;');
					refresh();
				}
			});
		}
        
        // call the "constructor" method
        init();

    }
    
    $.fn.menuManagementEnhancer = function(options) {

        return this.each(function() {
            if (undefined == $(this).data('menuManagementEnhancer')) {
                var menuManagementEnhancer = new $.menuManagementEnhancer(this, options);
                $(this).data('menuManagementEnhancer', menuManagementEnhancer);
            }
        });

    }


})(jQuery);


jQuery(document).ready(function($){

	var $menu = $('#menu-to-edit');
	if($menu.size() == 0) return;
	
	$menu.menuManagementEnhancer();
	var $mme = $menu.data('menuManagementEnhancer');
	
	var off = $('#menu-to-edit').offset().top + 10;
	$('#post-body').css('min-height', $(window).height() - off);
	
	
	$(window).scroll(function(){
		var top = $(window).scrollTop();
		if(top > off-10){
          	$('.sausage-set, .wpmme-toolbar').css('top', '10px');
        }
        else{
        	$('.sausage-set, .wpmme-toolbar').css('top', off - top + 'px');
        }
	});
	
	var toolbar = $('<div class="wpmme-toolbar">');
	$('body').append(toolbar);
	
	var toggleAll = $('<span class="wpmme-button toggle-on toggle-all" title="Expand/Collapse All">&uArr;</span>');
	
	toggleAll.click(function(){			
		
		if($(this).hasClass('toggle-on')){
			
			$mme.contractAll();
			$(this).toggleClass('toggle-on');
			$(this).html('&dArr;');
		}
		else{
			$mme.expandAll();
			$(this).toggleClass('toggle-on');
			$(this).html('&uArr;')
			
		}
				
	});
	
	toolbar.append(toggleAll);
	
	var toggleIDs = $('<span class="wpmme-button toggle-ids" title="Show/Hide Menu Item IDs">#</span>');
	toggleIDs.click(function(){
		$('.wpmme-item-id').toggle();
		$(this).toggleClass('toggle-on');
	});
	toolbar.append(toggleIDs);
	
	var toggleDesc = $('<span class="wpmme-button toggle-desc" title="Toggle Descriptions on/off">D</span>');
	toggleDesc.click(function(){
		var $field = $('.field-description');
		var $dh = $('#description-hide');
		if($field.hasClass('hidden-field')){
			$dh.prop('checked', true);
		}
		else $dh.prop('checked', false);
		$field.toggleClass('hidden-field');
		$(this).toggleClass('toggle-on');
		
		//Resize highlights when descriptions are toggled
		$mme.refreshHighlights();
		
	});
	toolbar.append(toggleDesc);
	
	var toggleSausageWidth = $('<span class="wpmme-button toggle-sausage-width" title="Toggle Scroller Width">&harr;</span>');
	toggleSausageWidth.click(function(){
		$('.sausage-set').toggleClass('sausage-wide');
		$(this).toggleClass('toggle-on');
	});
	toolbar.append(toggleSausageWidth);
	
	
	var hints = {
		
		'.wpmme-expando' : {
			text	: 'Click this button to expand and contract an item\'s sub items.',
			pos		: 'left'
		},
		'.wpmme-children': {
			text	: 'This shows you at a glance how many children the menu item has.  If you hover, '
						+'you\'ll see the total number of descendants as well',
			pos		: 'top'
		},
		'.wpmme-highlight-toggle': {
			text	: 'Hover over the highlighter icon to highlight the grouping for this menu item.',
			pos		: 'bottom'
		},
		'.toggle-all'	: {
			text	: 'Click this button to expand or collapse all of the submenu items.',
			pos		: 'left'
			
		},
		'.toggle-ids'	: {
			text	: 'Click this button to display or hide the CSS ID of each menu item.',
			pos		: 'left'
		},
		'.toggle-desc'	: {
			text	: 'Click this button to display or hide the description box for all menu items.',
			pos		: 'left'
		},
		'.toggle-sausage-width' : {
			text	: 'Click this button to expand the width of the scroll sections for easier clicking &amp; hovering.',
			pos		: 'left'
		},
		'.toggle-hints'	: {
			text	: 'Toggle these hints on and off',
			pos		: 'left'
		},
		'.sausage:nth-child(3)'	: {
			text	: 'Click a section of the scroller to scroll immediately to that top level menu item.  '+
						'When you are dragging a menu item, hold the <strong>shift</strong> key and hover over the scroller '+
						'to scroll to the section you want to drop the menu item in',
			pos		: 'left'
		}
		
	};
	
	var toggleHints = $('<span class="wpmme-button wpmme-button-hints toggle-hints" title="Hints">&nbsp;</span>');
	toggleHints.click(function(){
		$(this).toggleClass('toggle-on');
		
		togHints();
		
	});
	toolbar.append(toggleHints);
	
	function togHints(){
		
		if($('.toggle-hints').hasClass('toggle-on')) $(window).scrollTop(0); //off-50);
		
		var $hints = $('.wpmme-hint');
		if($hints.size() == 0){
			
			setTimeout(function(){
				//Create hints
				$hints = createHints();
			}, 200);	
		}		
		else $hints.toggle();
	}
	
	
	function createHints(){
		
		$hints = $();
		
		$.each(hints, function(id, data){
			
			var $target = $(id).first();
			var offset = $target.offset();
			var $hint = $('<span class="wpmme-hint">');
			$hint.html(data.text);
			
			var $tip = $('<span class="wpmme-hint-tip wpmme-hint-tip-'+data.pos+'">');
			$hint.append($tip);
			
			$('body').append($hint);
			$hints.add($hint);
			
			var css = {
				position 	: 'absolute',
				width		: '200px'
			}
			$hint.css(css);
			
			css = {};

			switch(data.pos){
				case 'left':
					css.left = offset.left - 220;
					css.top = offset.top - $hint.height()/2 + $target.height()/2;
					$tip.css('top', $hint.height()/2 - $tip.height()/2);
					break;
					
				case 'top':
					css.left = (offset.left + $target.width()/2) - 100;
					css.top = offset.top - $hint.height() - 25;
					$tip.css('left', $hint.width()/2 - $tip.width()/2);
					break;
					
				case 'right':
					css.left = offset.left + 20 + $target.width();
					css.top = offset.top - $hint.height()/2 + $target.height()/2;
					$tip.css('top', $hint.height()/2 - $tip.height()/2);
					
					break;
				
				case 'bottom':
					css.left = (offset.left + $target.width()/2) - 110;
					css.top = offset.top + $target.height() + 15;
					$tip.css('left', $hint.width()/2 - $tip.width()/2);
					break;
			}
			
			$hint.css(css);
			
		});
		
		$hs = $('.wpmme-hint');
		$hs.hover(function(){
			$hs.not(this).stop().fadeTo(100, .1);
			$(this).stop().fadeTo(100, 1);
		}, function(){
			$hs.stop().fadeTo(100, .8);
		});	
		
	}
	
	
	/*
	 * Reposition hints when the window resizes
	 */
	$(window).resize(function(){
		$('.wpmme-hint').remove();
		if($('.toggle-hints').hasClass('toggle-on')) createHints();
	});
	
	
	/*
	 * Move the sausages and the toolbar into position
	 */
	$('.sausage-set, .wpmme-toolbar').css('top', off+'px');
	
	//Sausage Hover (for dragging over)
	$('.sausage').live('mouseenter', function(e){
		if(e.shiftKey){
			$(this).click();
		}
	});
	
});
