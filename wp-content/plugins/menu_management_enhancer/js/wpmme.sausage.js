//     jquery.sausage.js 1.0.0
//     (c) 2011 Christopher Cliff
//     Freely distributed under the MIT license.
//     For all details and documentation:
//     http://christophercliff.github.com/sausage
//		Customized by Chris Mavricos, SevenSpark, for use with WordPress Menu Management Enhancer

(function($, undefined){
    
    $.widget('cc.wpmme_sausage', {
        
        options: {
            
            page: '.page',
            
            content: function (i, $page) {
                return '<span class="sausage-span">' + (i + 1) + '</span>';
            }
            
        },
        
        _create: function () {
            
            var self = this,
                $el = self.element;
            
            // Use $el for the outer element.
            self.$outer = $el;
            
            // Use `body` for the inner element if the outer element is `window`. Otherwise, use the first child of `$el`.
            self.$inner = $.isWindow(self.element.get(0)) ? $('body') : $el.children(':first-child');
            //self.$inner = $('#menu-to-edit');
            
            self.$sausages = $('<div class="sausage-set"/>');
            self.sausages = self.$sausages.get(0);
            self.offsets = [];
            
            self.$sausages
                .appendTo(self.$inner)
                ;
            
            // Trigger the `create` event.
            self._trigger('create');
            
            return;
        },
        
        _init: function () {
            
            var self = this;
            
            self.draw();
            self._update();
            self._events();
            self._delegates();
            
            // Add a CSS class for styling purposes.
            self.$sausages
                .addClass('sausage-set-init')
                ;
            
            self.blocked = false;
            
            // Trigger the `init` event.
            self._trigger('init');
            
            return;
        },
        
        _events: function () {
            
            var self = this;
            
            self.hasScrolled = false;
            
            self.$outer
                .bind('resize.sausage', function(){
                    
                    self.draw();
                    
                })
                .bind('scroll.sausage', function(e){
                    
                    self.hasScrolled = true;
                    
                })
                ;
            
            // [Prevent crazy amounts of scroll events from being fired](http://ejohn.org/blog/learning-from-twitter/) by setting an interval and listening.
            setInterval(function(){
                
                if (!self.hasScrolled)
                {
                    return;
                }
                
                self.hasScrolled = false;
                self._update();
                
            }, 250);
            
            return;
        },
        
        _getCurrent: function () {
            
            var self = this,
                st = self.$outer.scrollTop() + self._getHandleHeight(self.$outer, self.$inner)/4;	// - ss_normalize/4,
                h_win = self.$outer.height(),
                h_doc = self.$inner.height(),
                i = 0;
            
            for (l = self.offsets.length; i < l; i++)
            {
                if (!self.offsets[i + 1])
                {
                    return i;
                }
                else if (st <= self.offsets[i])
                {
                    return i;
                }
                else if (st > self.offsets[i] && st <= self.offsets[i + 1])
                {
                    return i;
                }
            }
            
            return i;
        },
        
        _delegates: function () {
            
            var self = this;
            
            self.$sausages
                .delegate('.sausage', 'hover', function(){
                    
                    if (self.blocked)
                    {
                        return;
                    }
                    
                    $(this)
                        .toggleClass('sausage-hover')
                        ;
                    
                })
                .delegate('.sausage', 'click', function(e){
                    e.preventDefault();
                    
                    if (self.blocked)
                    {
                        return;
                    }
                    
                    var $sausage = $(this),
                        val = $sausage.index(),
                        o = self.$inner.find(self.options.page).eq(val).offset().top;
                    
                    self._scrollTo(o);
                    
                    self._trigger('onClick', e, {
                        $sausage: $sausage,
                        i: val
                    });
                    
                    if ($sausage.hasClass('current'))
                    {
                        return;
                    }
                    
                    // Trigger the `onUpdate` event.
                    self._trigger('onUpdate', e, {
                        $sausage: $sausage,
                        i: val
                    });
                })
                ;
            
            return;
        },
        
        _scrollTo: function (o) {
            
            var self = this,
                $outer = self.$outer,
                rate = 2/1, // px/ms
                distance = self.offsets[self.current] - o,
                duration = Math.abs(distance/rate);
                // Travel at 2 px per 1 ms but never longer than 1 s.
                duration = (duration < 1000) ? duration : 1000;
            
            if (self.$outer.get(0) === window)
            {
                $outer = $('body, html, document');
            }
            
            $outer
                .stop(true)
                .animate({
                    scrollTop: o
                }, duration)
                ;
            
            return;
        },
        
        _handleClick: function () {
            
            var self = this
            
            
            
            return;
        },
        
        _update: function () {
            
            var self = this;
                i = self._getCurrent(),
                c = 'sausage-current';
            
            if (i === self.current || self.blocked)
            {
                return;
            }
            
            self.current = i;
            
            self.$sausages.children().eq(i)
                .addClass(c)
            .siblings()
                .removeClass(c)
                ;
            
            // Trigger the `update` event.
            self._trigger('update');
            
            return;
        },
        
        _getHandleHeight: function ($outer, $inner) {
            
            var h_outer = $outer.height(),
                h_inner = $inner.height();
            
            var ss_normalize = $('#menu-to-edit').offset().top + 10;
            return h_outer/h_inner*h_outer - ss_normalize;
        },
     
        // Creates the sausage UI elements.
        draw: function () {

            var ss_normalize = $('#menu-to-edit').offset().top; //250;
            
            var self = this,
                h_win = self.$outer.height(),// - ss_normalize - 100,
                h_doc = $('#post-body').height() + ss_normalize, //self.$inner.height(),
                $items = self.$inner.find(self.options.page),
                $page,
                s = [],
                offset_p,
                offset_s;
     
            self.offsets = [];
            self.count = $items.length;
            
            // Detach from DOM while making changes.
            self.$sausages
                .detach()
                .empty()
                ;
            
            // Calculate the element heights and push to an array.
            for (var i = 0; i < self.count; i++)
            {
                $page = $items.eq(i);
                $nextpage = $items.eq(i+1);
                offset_p = $page.offset();
                offset_s = (offset_p.top - ss_normalize)/(h_doc)*h_win;
                
                var pageheight;
                if($nextpage.size() == 0){
                	pageheight = ($page.outerHeight()/h_doc*h_win);
                	var $last = $('.menu-item').last();
                	pageheight = ($last.offset().top + $last.height() - offset_p.top) / h_doc*h_win;
                }
                else{
					pageheight = ($nextpage.offset().top - offset_p.top) / h_doc*h_win - 10;
                }
                if(pageheight < 5){
                	pageheight = 5;
                	offset_s -= ( pageheight );
                }
                
                s.push('<div class="sausage' + ((i === self.current) ? ' sausage-current' : '') + '" style="height:' + pageheight + 'px;top:' + offset_s + 'px;">' + self.options.content(i, $page) + '</div>');
                
                // Create `self.offsets` for calculating current sausage.
                self.offsets.push(offset_p.top);
            }
            
            // Use Array.join() for speed.
            self.sausages.innerHTML = s.join('');
            
            // And reattach.
            self.$sausages
                .appendTo(self.$inner)
                ;
            return;
        },
        
        // Blocks the UI to prevent users from interacting with the sausage UI. Useful when loading data and updating the DOM.
        block: function () {
            
            var self = this,
                c = 'sausage-set-blocked';
            
            self.blocked = true;
            
            // Add a CSS class for styling purposes.
            self.$sausages
                .addClass(c)
                ;
            
            return;
        },
        
        // Unblocks the UI once loading and DOM manipulation are complete.
        unblock: function () {
            
            var self = this,
                c = 'sausage-set-blocked';
            
            self.$sausages
                .removeClass(c)
                ;
            
            self.blocked = false;
            
            return;
        },
        
        // Removes the sausage instance from the DOM.
        destroy: function () {
            
            var self = this;
            
            self.$outer
                .unbind('.sausage')
                ;
            
            self.$sausages
                .remove()
                ;
            
            return;
        }
        
    });
    
})(jQuery);