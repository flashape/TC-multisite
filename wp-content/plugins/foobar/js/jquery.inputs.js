(function($) {
  D = function( value, header ) {
    if ( window.console ) {
      if ( typeof header != 'undefined' ){ console.debug(header); };
      console.debug(value);
    };
  };
  
  String.prototype.te_format = function () {
    var args = arguments;
    return this.replace(/\{\{|\}\}|\{(\d+)\}/g, function (m, n) {
      if (m == "{{") { return "{"; }
      if (m == "}}") { return "}"; }
      return args[n];
    });
  };

  $.fn.checkbox = function( options ) {
    var settings = $.extend(true, {}, cb.def, options);
    return this.each(function(){
      var combined = $.extend(true, {}, settings, $(this).data());
      if (typeof cb.themes[combined.theme] != 'undefined' ) {
        combined = $.extend(true, {}, combined, cb.themes[combined.theme]);
      };
      combined = $.extend(true, {}, combined, options, $(this).data());
      cbradio.init.apply(this, [combined, cb.classes]);
    });
  };

  $.checkbox = function( options ) {
    $.extend(true, cb.def, options);
  };
  
  $.fn.radio = function( options ) {
    var settings = $.extend(true, {}, radio.def, options);
    return this.each(function(){
      var combined = $.extend(true, {}, settings, $(this).data());
      if (typeof radio.themes[combined.theme] != 'undefined' ) {
        combined = $.extend(true, {}, combined, radio.themes[combined.theme]);
      };
      combined = $.extend(true, {}, combined, options, $(this).data());
      cbradio.init.apply(this, [combined, radio.classes]);
    });
  };

  $.radio = function( options ) {
    $.extend(true, radio.def, options);
  };
  
  $.fn.numeric = function( options ) {
    var settings = $.extend(true, {}, num.def, options);
    return this.each(function(){
      var combined = $.extend(true, {}, settings, $(this).data());
      if (typeof num.themes[combined.theme] != 'undefined' ) {
        combined = $.extend(true, {}, combined, num.themes[combined.theme]);
      };
      combined = $.extend(true, {}, combined, options, $(this).data());
      num.init.apply(this, [combined, num.classes]);
    });
  };

  var cb = {
    classes: {
      container: 'checkbox',
      left: 'checkbox-left',
      center: 'checkbox-center',
      right: 'checkbox-right'
    },
    themes: {
      toggle: {
        height: '24px',
        centerwidth: '46px'
      },
      green: {
        height: '30px',
        centerwidth: '30px'
      },
      toggle2: {
        height: '24px',
        centerwidth: '56px'
      }
    },
    def : {
      theme: 'default',
      textvisible: false, // Whether or not the text is displayed
      textchecked: 'True', // The text displayed to the right of the checkbox (The CHECKED state text)
      textunchecked: 'False', // The text displayed to the left of the checkbox (The UNCHECKED state text)
      height: '24px', // All segments of the $.checkbox share the same height
      leftwidth: '40px', // The width of the UNCHECKED state text element
      centerwidth: '56px', // The width of the center segment which displays the checkbox state image
      rightwidth: '40px' // The width of the CHECKED state text element
    }
  };

  var radio = {
    classes: {
      container: 'radio',
      left: 'radio-left',
      center: 'radio-center',
      right: 'radio-right'
    },
    themes: {
      toggle: {
        height: '24px',
        centerwidth: '46px'
      },
      green: {
        height: '30px',
        centerwidth: '30px'
      },
      toggle2: {
        height: '24px',
        centerwidth: '56px'
      }
    },
    def : {
      theme: 'default',
      textvisible: false, // Whether or not the text is displayed
      textchecked: 'True', // The text displayed to the right of the checkbox (The CHECKED state text)
      textunchecked: 'False', // The text displayed to the left of the checkbox (The UNCHECKED state text)
      height: '24px', // All segments of the $.checkbox share the same height
      leftwidth: '40px', // The width of the UNCHECKED state text element
      centerwidth: '24px', // The width of the center segment which displays the checkbox state image
      rightwidth: '40px' // The width of the CHECKED state text element
    }
  };

  var cbradio = { // due to radio buttons and checkboxes being so similar both controls logic is housed in this combined logic class
    init: function( settings, classes ) {
      var $this = $(this);
      var $parent = $this.parent();
      
      var onClicked = function(e){
        e.preventDefault(); // kill the default click action
        e.stopPropagation(); // stop the event from bubbling
        cbradio.switchState($this, classes);
        return false;
      };
      
      var onOver = function(){ $this.siblings('span').addClass('hover'); };
      var onOut = function(){ $this.siblings('span').removeClass('hover'); };
      
      var tabindex = $this.attr('tabindex');
      tabindex = ( typeof tabindex != 'undefined' && tabindex != false ) ? tabindex : 0;

      $this
        .wrap('<span class="' + classes.container + '" />')
        .css({ display: 'none', width: 0, height: 0})
        .parent()
          .attr('tabindex', tabindex)
          .height(settings.height)
          .click(onClicked)
          .hover(onOver, onOut)
          .prepend($('<span class="' + classes.right + '">'+settings.textchecked+'</span>').width(settings.rightwidth))
          .prepend($('<span class="' + classes.center + '"></span>').width(settings.centerwidth))
          .prepend($('<span class="' + classes.left + '">'+settings.textunchecked+'</span>').width(settings.leftwidth));
      
      if ( !settings.textvisible ) { $this.siblings('span.' + classes.left + ', span.' + classes.right).remove(); };
      
      var title = $this.attr('title');
      if ( typeof title != 'undefined' && title != false ) { $this.parent().attr('title', title); };
      $this
        .siblings('span')
          .height(settings.height)
          .css({ 'margin': 0, 'padding': 0, 'line-height': settings.height, 'text-align': 'center', 'display': 'inline-block', 'vertical-align': 'middle' })
          .addClass(settings.theme);
      
      // check if theres a for label to go with this checkbox and hook up the click event on that aswell...
      // seeing as nesting an input within a label is also a valid way of assigning that label to the input without using the "for" attribute check for a parent label...
      var $label = null;
      var id = $this.attr('id');
      if ( $parent.is('label') ) { $label = $parent; }
      else if ( typeof id != 'undefined' && id != false ) { $label = $('label[for="'+id+'"]'); };
      if ( $label != null ) {
        $label
          .css({ 'margin': 0, 'padding-top': 0, 'padding-bottom': 0, 'cursor': 'pointer', 'line-height': settings.height, 'vertical-align': 'middle' })
          .click(onClicked)
          .hover(onOver, onOut);
          
        if ( typeof title != 'undefined' && title != false ) { $label.attr('title', title); };
      };
      
      cbradio.setState($this, classes);
      return true;
    },
    setState: function( $cbradio, classes ) {
      var $span = $cbradio.siblings('span');
      $span.removeClass('selected disabled');
      if ( $cbradio.is(':disabled') ) { $span.addClass('disabled'); }
      if ( ( $cbradio.is(':checked') || $cbradio.attr('checked') == 'checked' ) ) { $cbradio.siblings('span.' + classes.right + ', span.' + classes.center).addClass('selected'); }
      else { $cbradio.siblings('span.' + classes.left).addClass('selected'); };
      return true;
    },
    switchState: function( $cbradio, classes ){
      if ( $cbradio.is(':disabled') || ( $cbradio.is('input[type="radio"]') && ( $cbradio.is(':checked') || $cbradio.attr('checked') == 'checked' ) ) ) { return; };
      if ( $cbradio.is('input[type="checkbox"]') ) {
        if ( ( $cbradio.is(':checked') || $cbradio.attr('checked') == 'checked' ) ) { $cbradio.removeAttr('checked'); }
        else { $cbradio.attr('checked', 'checked'); };
        cbradio.setState($cbradio, classes);
      } else if ( $cbradio.is('input[type="radio"]') ) {
        var name = $cbradio.attr('name');
        if ( typeof name != 'undefined' && name != false  ) {
          $('input[type="radio"][name="' + name + '"]').not($cbradio).each(function(){
            $(this).removeAttr('checked');
            cbradio.setState($(this), classes);
          });
          $cbradio.attr('checked', 'checked');
          cbradio.setState($cbradio, classes);
        };
      };
      $cbradio.change();
      return true;
    }
  };
  
  var num = {
    classes: {
      container: 'numeric',
      value: 'numeric-value',
      slide: 'numeric-slide',
      slider: 'numeric-slider'
    },
    themes : {
      toggle: {
        valueformat: '{0}',
        height: '20px',
        slidewidth: '132px',
        valuewidth: '30px',
        buttonheight: '20px',
        buttonwidth: '20px'
      },
      green: {
        valueformat: '{0}',
        height: '28px',
        slidewidth: '130px',
        valuewidth: '30px',
        buttonheight: '28px',
        buttonwidth: '22px'
      }
    },
    def: {
      start: 0,
      end: 20,
      step: 1,
      precision: 0,
      snap: false,
      displayvalue: 'right', // left/right/hidden
      theme: 'default',
      valueformat: '{0}',
      height: '20px',
      slidewidth: '132px',
      valuewidth: '30px',
      buttonheight: '20px',
      buttonwidth: '12px'
    },
    init: function( settings, classes ){
      var $this = $(this);
      
      var tabindex = $this.attr('tabindex');
      tabindex = ( typeof tabindex != 'undefined' && tabindex != false ) ? tabindex : 0;

      $this
        .wrap('<span class="' + classes.container + '" />')
        .css({ 'display': 'none', 'width': 0, 'height': 0, 'border': 'none', 'position': 'absolute' })
        .parent()
          .prepend('<span class="' + classes.slide + '"><span class="' + classes.slider + '"></span></span>');
      
      var $container = $this
        .parent()
          .attr('tabindex', tabindex)
          .height(settings.height)
          .css({ 'display': 'inline-block', 'vertical-align': 'middle', 'cursor': 'pointer', 'margin': '0 10px' });
          
      if ( settings.displayvalue == 'left' ) { $container.prepend('<span class="' + classes.value + '"></span>'); }
      else if ( settings.displayvalue == 'right' ) { $container.append('<span class="' + classes.value + '"></span>'); };

      var $value = $container
        .children('.' + classes.value)
          .width(settings.valuewidth)
          .height(settings.height)
          .css({ 'display': 'inline-block', 'text-align': 'center', 'line-height': settings.height, 'float': 'left' })
          .addClass(settings.theme);
    
      var $slide = $container
        .children('.' + classes.slide)
          .width(settings.slidewidth)
          .height(settings.height)
          .css({ 'display': 'inline-block' })
          .addClass(settings.theme);
    
      var $slider = $slide
        .children('.' + classes.slider)
          .width(settings.buttonwidth)
          .height(settings.buttonheight)
          .css({ 'display': 'inline-block' })
          .addClass(settings.theme);
      
      $container.hover(function(){ $value.add($slide).add($slider).addClass('hover'); }
      , function(){ $value.add($slide).add($slider).removeClass('hover'); });

      var title = $this.attr('title');
      if ( typeof title != 'undefined' && title != false ) { $container.attr('title', title); };
      
      var width = $slide.width();
      var top = Math.round(($slide.height() - $slider.height())/2);
      var left = Math.round(-($slider.width()/2));
      var min = left, max = min + width;
      var start = original = previous = null;
      var moving = false;
      var wasMoving = false;
      
      if ( settings.displayvalue == 'left' ) { $value.css({ 'float': 'left', 'padding-right': Math.abs(left) }); }
      else if ( settings.displayvalue == 'right' ) { $value.css({ 'float': 'right', 'padding-left': Math.abs(left) }); };

      var mu = {
        round: function( num, pre ) {
          return parseFloat(num.toFixed(pre));
        },
        minMaxCheck: function( val, mn, mx) {
          return ( val < mn ) ? mn : ( val > mx ) ? mx : val;
        },
        calcByMargin: function( margin, forcesnap ) {
          var length = settings.end - settings.start;
          margin = mu.minMaxCheck(margin, min, max);
          var val = mu.round(length * ((margin + ( Math.abs(left) )) / width), settings.precision) + settings.start;
          val = settings.snap || forcesnap ? mu.minMaxCheck(Math.round(val / settings.step) * settings.step, settings.start, settings.end) : mu.minMaxCheck(val, settings.start, settings.end);
          margin = settings.snap || forcesnap ? mu.minMaxCheck(Math.round(((val - settings.start) / length) * width) - Math.abs(left), min, max) : mu.minMaxCheck(margin, min, max);
          return { 'margin': margin, 'value': val };
        },
        calcByValue: function( val, forcesnap ) {
          var length = settings.end - settings.start;
          val = settings.snap || forcesnap ? mu.minMaxCheck(Math.round(val / settings.step) * settings.step, settings.start, settings.end) : mu.minMaxCheck(val, settings.start, settings.end);
          var margin = mu.minMaxCheck(mu.round(((val - settings.start) / length) * width, settings.precision) - Math.abs(left), min, max);
          return { 'margin': margin, 'value': val };
        }
      };
      
      $this.focus(function(e){
        $(document).unbind('keyup.numeric');
        $(document).bind('keyup.numeric', function(e){
          var current = $this.val();
          current = current != null ? parseFloat(current) : 0;
          switch( e.keyCode ) {
            case 38: // Up
            case 39: // Right
              current = current + settings.step;
              break;
            case 40: // Down
            case 37: // Left
              current = current - settings.step;
              break;
          };
          var pos = mu.calcByValue(current, false);
          if (pos.value != previous) {
            $slider.css({ 'margin-left': pos.margin });
            previous = pos.value;
            $this.val(pos.value);
            $value.text(settings.valueformat.te_format(pos.value));
          };
        });
      })
      .blur(function(e){
        $(document).unbind('keyup.numeric');
      });
      
      $slide.click(function(e){
        e.preventDefault();
        $this.focus();
        if ( wasMoving ) {
          wasMoving = false;
        } else {
          start = $(this).offset().left;
          if ( start != null ){
            var pos = mu.calcByMargin(left + (e.pageX - start), true);
            if (pos.value != previous) {
              $slider.css({ 'margin-left': pos.margin });
              previous = pos.value;
              $this.val(pos.value);
              $value.text(settings.valueformat.te_format(pos.value));
            };
          };
        };
      });

      $slider
        .css({ 'margin-top': top, 'margin-left': left })
        .mousedown(function(e) {
          e.preventDefault();
          $this.focus();
          moving = true;
          start = e.pageX;
          original = parseInt($slider.css('margin-left'));
          original = isNaN(original) ? 0 : original;
          var length = settings.end - settings.start;

          $(document).bind('mousemove.numeric', function(e) {
            if ( start != null ){
              var pos = mu.calcByMargin(original + (e.pageX - start), false);
              if (pos.value != previous) {
                var snapped = (( pos.value / settings.step ) == Math.round(( pos.value / settings.step )));
                if ((snapped && settings.snap) || !settings.snap) { $slider.css({ 'margin-left': pos.margin }); };
                if (snapped) {
                  previous = pos.value;
                  $this.val(pos.value);
                  $value.text(settings.valueformat.te_format(pos.value));
                };
              };
            };
          });
        })
        
      var current = $this.val();
      current = current != null ? current : 0;

      var pos = mu.calcByValue(current, false);
      if (pos.value != previous) {
        $slider.css({ 'margin-left': pos.margin });
        previous = pos.value;
        $this.val(pos.value);
        $value.text(settings.valueformat.te_format(pos.value));
      };

      $(document).mouseup(function(e) {
        if ( moving ) {
          e.preventDefault();
          moving = false;
          wasMoving = true;
          start = original = previous = null;
          $(this).unbind('mousemove.numeric');
        };
      });
    }
  };

})(jQuery);