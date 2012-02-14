/*!
 * FooBar - The Unobtrusive Notification Bar That Doesn’t Suck!
 * http://bit.ly/getfoobar
 *
 * Copyright 2011, Steven Usher & Brad Vincent
 * http://themergency.com
 * http://themergency.com/foobar-a-jquery-notification-plugin/
 *
 * Date: 27 July 2011
 * Version : 1.4.1
 */

(function($){

  $.foobar = function( options ) { // $.foobar the main constructor for the plugin
    if ( typeof options == "string" ){ options = { "messages": [options] }; }; // if just a string is passed into the constructor assume it to be the only message to display
    var settings = $.extend(true, {}, defaults, options); // extend the default options with the user provided options
    bar.apply(settings);
  };

  $.foobarGoogleCallback = function() { // this is the function called once the google api has been loaded into the page
    bar.loadFeeds();
  };
  
  defaults = {
    "height": 30, // The height of the bar in pixels
    "collapsedButtonHeight": 30, // The height of the button in pixels, when the bar is collapsed
    "positioning": "fixed", // How the bar is positioned within the page (inline | fixed)
    "backgroundColor": "IndianRed", // The CSS background color of the bar
    "border": "solid 3px #FFF", // The CSS border styling for the bottom of the bar
    "enableShadow": true, // Sets whether to display the shadow below the bar and close button.
    
    "buttonTheme": "triangle-arrow",

    "display": "expanded", // The initial state of the FooBar (expanded, collapsed, delayed, onscroll)
    "displayDelay": 0, // Used in conjunction with the "delayed" and "onscroll" display values to determine the amount of time to wait before showing the bar

    "speed": 200, // The speed at which to scroll the bar into view
    "easing": "swing",	//The type of easing used when expanding or collapsing the bar
    
    "messages": [], // The messages to display in the bar
    //If only 1 message it will be displayed permanently otherwise the messagesDelay value is used to cycle through the array.

    "messageSizes" : [],

    "messagesDelay": 4000, // The delay between switching of messages if more than 1 is supplied
    "messagesFadeDelay": 500, // The time it takes to transition to the next message    
    "messagesScrollSpeed": 50, // The pixels per second to scroll extra length messages into view
    "messagesScrollDelay": 2000, // The delay between initially displaying a long message and the beginning of scrolling it
    "messagesScrollDirection": "left", // The direction to scroll the text of long messages (left, right)
    
    "enableCookie": false, // stores the state of the bar in a client-side cookie (open or closed)
    "positionClose": "right", // Position of the close button (left | right | hidden)
    "positionSocial": "left", // Position of the social links (left | right | hidden)
    
    "rightHtml": null,  //custom HTML that is displayed in the right section of the bar
    "leftHtml": null,   //custom HTML that is displayed in the left section of the bar
    "leftWidth" : null, //custom width of the left section of the bar
    "rightWidth" : null,//custom width of the right section of the bar
    "centerWidth" : null,//custom width of the center section of the bar that contains the messages

    "messageClass": "", // The CSS class to apply to the messages
	
    "fontFamily": "Verdana", // The font family used for the messages
    "fontSize": "10pt", // The font size used for the messages
    "fontColor": "White", // The font color used for the messages
    "fontShadow": null, // The shadow applied to the font used for messages (only supported by browsers that support CSS3)
	
    "aFontFamily": "Verdana", // The font family of any links in the messages
    "aFontSize": "10pt", // The font size of any links in the messages
    "aFontColor": "LightYellow", // The font color of any links in the messages
    "aFontDecoration": "underline", // The text decoration of any links in the messages
    "aFontShadow": null, // The shadow applied to the font of any links in the messages (only supported by browsers that support CSS3)
	
    "aHoverFontFamily": null, // The font family of any links in the messages
    "aHoverFontSize": null, // The font size of any links in the messages
    "aHoverFontColor": null, // The font color of any links in the messages
    "aHoverFontDecoration": null, // The text decoration of any links in the messages
    "aHoverFontShadow": null, // The shadow applied to the font of any links in the messages (only supported by browsers that support CSS3)
	
    "social": {
      "text": "Follow us:", // The text displayed in the social area
      "fontFamily": "Verdana", // The font family of the text in the social area
      "fontSize": "10pt", // The font size of the text in the social area
      "fontColor": "White", // The font color of the text in the social area
      "fontShadow": null, // The shadow applied to the font of the text in the social area (only supported by browsers that support CSS3)
      "profiles": []
    },
	
    "rss": {
      "enabled": false, // If messages can be populated using an RSS feed
      "googleAPIKey": "", // Your Google API key, that is needed in order to pull RSS feed results
      "url": "http://my-domain.com/rss", // The URL to the RSS feed
      "maxResults": 5, //The maximum number of RSS feed resuls to display as messages
      "linkText": "Read More", // The text displayed for the link back to the original post
      "linkTarget": "_blank" // The target for rss links (_blank | _self | _parent | _top | 'framename')
    },
    
    "twitter": {
      "enabled": false, // If tweets can be loaded
      "user": null, // the user whose tweets you want to show
      "maxTweets": 5 // max number of tweets to fetch
    }
  };
  
  bar = {
    settings: {},

    wrapper: null,
    container: null,
    shadow: null,
    left: null,
    center: null,
    message: null,
    right: null,
    closeButtonContainer: null,
    closeButton: null,
    openButtonContainer: null,
    openButton: null,
    
    initialized: false,
    isOpen: false,
    htmlMarginTop: 0,
    messageTimeoutId: null,
    messageIndex: 0,
    currentMesasgeIndex: -1,
    messageHover:false,

    initialize: function() { // creates the initial foobar html and appends it to the DOM.
      var $html = $('html');
      bar.htmlMarginTop = parseInt($html.css('margin-top'));
      bar.htmlMarginTop = isNaN(bar.htmlMarginTop) ? 0 : bar.htmlMarginTop;

      if ( $('.foobar-wrapper').length == 0 ) { // if the foobar doesn't exist create it
        bar.wrapper = $('<div/>').addClass('foobar-wrapper');
        bar.container = $('<div/>').addClass('foobar-container');
        bar.shadow = $('<div/>').addClass('foobar-shadow');
        bar.left = $('<div/>').addClass('foobar-container-left');
        bar.center = $('<div/>').addClass('foobar-container-center');
        bar.message = $('<span/>').addClass('foobar-message');
        bar.right = $('<div/>').addClass('foobar-container-right');

        bar.closeButtonContainer = $('<div/>').addClass('foobar-close-button-container');
        bar.closeButton = $('<a/>').attr('href', '#close-foobar').addClass('foobar-close-button').text(' ');
    
        bar.openButtonContainer = $('<div/>').addClass('foobar-open-button-container');
        bar.openButton = $('<a/>').attr('href', '#open-foobar').addClass('foobar-open-button').text(' ');
        
        bar.addTo('body');
        
        bar.initialized = true;
      } else { // else get the already existing elements
        bar.wrapper = $('.foobar-wrapper');
        bar.container = $('.foobar-container');
        bar.shadow = $('.foobar-shadow');
        bar.left = $('.foobar-container-left');
        bar.center = $('.foobar-container-center');
        bar.message = $('.foobar-message');
        bar.right = $('.foobar-container-right');

        bar.closeButtonContainer = $('.foobar-close-button-container');
        bar.closeButton = $('.foobar-close-button').text(' ');
    
        bar.openButtonContainer = $('.foobar-open-button-container');
        bar.openButton = $('.foobar-open-button').text(' ');

        bar.initialized = true;
      };
    },
    
    reset: function() {
      bar.left.empty(); //clear the left side
      bar.right.empty(); //clear the right side
    },
    
    setCookie: function( name , value , days ) { // creates a cookie using the supplied parameters
      if ( days ) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
      } else { var expires = ""; };
      document.cookie = name+"="+value+expires+"; path=/";
    },

    getCookie: function( name ) { // gets a cookie by name and returns it's value
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for( var i=0; i < ca.length; i++ ) {
        var c = ca[i];
        while ( c.charAt(0)==' ' ) c = c.substring(1,c.length);
        if ( c.indexOf(nameEQ) == 0 ) return c.substring(nameEQ.length,c.length);
      }
      return null;
    },
    
    deleteCookie: function( name ) { // deletes a cookie by name
      bar.setCookie(name,"",-1);
    },

    addTo: function( selector ) { // appends the bar to the DOM
      $(selector).prepend(bar.wrapper);
      bar.wrapper.append(bar.container).append(bar.shadow).append(bar.openButtonContainer);
      bar.container.append(bar.closeButtonContainer).append(bar.left).append(bar.center.append(bar.message)).append(bar.right);
      bar.closeButtonContainer.append(bar.closeButton);
      bar.openButtonContainer.append(bar.openButton);
    },

    isNotNullOrEmpty: function( strVal ) { // checks if the supplied parameter is a string and is null or empty
      return ( typeof strVal == "string" && strVal != null && strVal != "" );
    },

    messageCycleReset : function() {
      if (bar.messageHover) {
        //pause on the message
        bar.messageTimeoutId = setTimeout(bar.messageCycleReset, bar.settings.messagesDelay);
        return;
      };

      //set the message back to the begginning position
      $("#foobar-message-"+bar.currentMesasgeIndex).animate({ 'margin-left': 0 }, 500, function() {
        bar.currentMesasgeIndex = -1; //reset the current index so it will cycle again
        bar.messageCycle();
      });
    },

    messageCycleFade : function() {
      if (bar.messageHover) {
        //pause on the message
        bar.messageTimeoutId = setTimeout(bar.messageCycleFade, bar.settings.messagesDelay);
        return;        
      };

      $current = $("#foobar-message-"+bar.currentMesasgeIndex);

      //fade the current message out
      $current.animate({ 'opacity': 0 }, bar.settings.messagesFadeDelay/2, function(){
        
        //once the message has faded out, lets reset it's margin for the next time it is needed and hide it
        $current.css({ 'margin-left': 0 }).hide();

        //and cycle to next message
        bar.messageCycle();
      });
    },
    
    parseHtml: function(html) { //parse HTML to see if elements from the dom must be included
      if ( ! bar.isNotNullOrEmpty(html) ) return html;
      
      //check if the html contains the keyword "{{include:}}"
      if ( html && html.match('{{include:(.*?)}}') ) {
        var regEx = new RegExp('{{include:(.*?)}}');
        var match = regEx.exec(html);
        while (match != null) {
          //get the element's html
          var matchedHtml = $(match[1]).html();
          html = html.replace(match[0], matchedHtml);
          match = regEx.exec(html);
        }
      }
      
      return html;
    },

    messageCycle: function() { // this method now controls all aspects of displaying of messages including the side scrolling animate

      if (!bar.isOpen) { return; }

      if (bar.messageHover) {
        //pause on the message
        bar.messageTimeoutId = setTimeout(bar.messageCycle, bar.settings.messagesDelay);
        return;
      };

      if (bar.currentMesasgeIndex == bar.messageIndex) { return; }
      
      bar.clearMessageTimeout();

      if ($('.foobar-message-wrapper').length == 0) {
        //first thing we do is append the messages to the dom to calculate their true widths
        for (var i=0; i<bar.settings.messages.length; i++) {
          
          var messageHtml = bar.parseHtml(bar.settings.messages[i]);
         
          var $message = $('<div id="foobar-message-'+i+'" class="foobar-message-wrapper">' + messageHtml + '</div>');
          $message.css({ position: "absolute", display: "block", width: "auto" });
          $message.css({ left: "0", top : i*100 + 100 });
          //style links if we need to
          if ( !bar.isNotNullOrEmpty(bar.settings.messageClass) ){
            var $a = $message.find('a');
            bar.styleLinks( $a );
            bar.styleLinksHover( $a );
          };

          //append it to the dom
          bar.message.append($message);
          bar.settings.messageSizes[i] = $message.width();

          $message.hover(bar.pauseMessages, bar.resumeMessages);

          if (i != bar.messageIndex) { $message.hide(); }
        }
      };

      //get the current message
      var $currentMessage = $("#foobar-message-"+bar.messageIndex);

      //show the message
      $currentMessage.css( { position: "static", visability: "visible", marginLeft: "0", opacity: "100" } ).show();

      //set the current index
      bar.currentMesasgeIndex = bar.messageIndex;

      //get the current centre bar width to find out if we must scroll or not
      var cWidth = bar.center.width();

      //get current message width that we calculated previously
      var mWidth = bar.settings.messageSizes[bar.messageIndex];

      //increment index if we have more than 1 message
      ( bar.messageIndex >= (bar.settings.messages.length - 1) ) ? bar.messageIndex = 0 : bar.messageIndex++;

      if ( mWidth > cWidth ) { //we need to scroll the message
        
        //how far do we need to scroll it
        var diff = mWidth - cWidth;

        //how fast will it scroll
        var speed = Math.round(diff / bar.settings.messagesScrollSpeed) * 1000;

        //force the width
        $currentMessage.css({ 'width': mWidth });

        //force the container width
        bar.message.css({ 'width': cWidth });

        $currentMessage.delay(bar.settings.messagesScrollDelay).animate({ 'margin-left': '-' + diff }, speed, 'linear', function(){
          //we can continue to the next message now please

          if ( bar.messageIndex == bar.currentMesasgeIndex) {
            //delay and then reset
            bar.messageTimeoutId = setTimeout(bar.messageCycleReset, bar.settings.messagesDelay);
          } else {
            //delay and then continue with the message cycling
            bar.messageTimeoutId = setTimeout(bar.messageCycleFade, bar.settings.messagesDelay);
          };

        });
      } else {
        if ( bar.messageIndex != bar.currentMesasgeIndex) { //we need to proceed to the next message
          //delay and then continue with the message cycling
          bar.messageTimeoutId = setTimeout(bar.messageCycleFade, bar.settings.messagesDelay);
        };
      };

      return;

    },
    
    styleLinks: function( links ) {
      if (bar.isNotNullOrEmpty(bar.settings.aFontFamily)){ links.css('font-family', bar.settings.aFontFamily); };
      if (bar.isNotNullOrEmpty(bar.settings.aFontSize)){ links.css('font-size', bar.settings.aFontSize); };
      if (bar.isNotNullOrEmpty(bar.settings.aFontColor)){ links.css('color', bar.settings.aFontColor); };
      if (bar.isNotNullOrEmpty(bar.settings.aFontDecoration)){ links.css('text-decoration', bar.settings.aFontDecoration); };
      if (bar.isNotNullOrEmpty(bar.settings.aFontShadow)){ links.css('text-shadow', bar.settings.aFontShadow); };
    },    
    
    styleLinksHover: function( links ) {
      links.unbind('mouseenter').bind({
        mouseenter: function(){
          if (bar.isNotNullOrEmpty(bar.settings.aHoverFontFamily)){ $(this).css('font-family', bar.settings.aHoverFontFamily); };
          if (bar.isNotNullOrEmpty(bar.settings.aHoverFontSize)){ $(this).css('font-size', bar.settings.aHoverFontSize); };
          if (bar.isNotNullOrEmpty(bar.settings.aHoverFontColor)){ $(this).css('color', bar.settings.aHoverFontColor); };
          if (bar.isNotNullOrEmpty(bar.settings.aHoverFontDecoration)){ $(this).css('text-decoration', bar.settings.aHoverFontDecoration); };
          if (bar.isNotNullOrEmpty(bar.settings.aHoverFontShadow)){ $(this).css('text-shadow', bar.settings.aHoverFontShadow); };
        },
        mouseleave: function(){
          bar.styleLinks($(this));
        }
      });
    },
    
    clearMessageTimeout: function() { // clears the timeout used to cycle through the messages
      if ( typeof bar.messageTimeoutId != 'undefined' && bar.messageTimeoutId != null ){
        clearTimeout(bar.messageTimeoutId);
      };
      bar.messageTimeoutId = null;
    },

    setMessageTimeout: function() { // starts the timeout thats loops through the messages
      bar.clearMessageTimeout();
      if ( typeof bar.messageTimeoutId == 'undefined' || bar.messageTimeoutId == null ){
        bar.messageTimeoutId = setTimeout(bar.messageCycle, bar.settings.messagesDelay);
      };
    },

    isGoogleLoaded: function() { // checks if the Google api is loaded
      var googleAPI = false;
      $('head > script[type="text/javascript"]').each(function(){
        var src = $(this).attr('src');
        var check = "http://www.google.com/jsapi?key=";
        if ( bar.isNotNullOrEmpty(src) && src.length >= check.length && src.substr(0, check.length) === check ){
          googleAPI = true;
        };
      });
      return ( googleAPI && !(typeof google == 'undefined') );
    },

    isFeedsLoaded: function() { // checks if the Google Feeds api is loaded
      return ( bar.isGoogleLoaded() && !(typeof google.feeds == 'undefined') );
    },

    loadGoogle: function() { // loads the Google api
      var script = document.createElement("script");
      script.src = "http://www.google.com/jsapi?key=" + bar.settings.rss.googleAPIKey + "&callback=jQuery.foobarGoogleCallback";
      script.type = "text/javascript";
      document.getElementsByTagName("head")[0].appendChild(script);
    },

    loadFeeds: function() { // loads the Google Feeds api
      google.load("feeds", "1", { 'callback': bar.loadRss });
    },

    loadRss: function() { // loads the rss feeds content and appends it to the messages array
      var feed = new google.feeds.Feed(bar.settings.rss.url);
      feed.setNumEntries(bar.settings.rss.maxResults);
      feed.load(function(result) {
        bar.clearMessageTimeout();

        if ( !result.error ) {
          for ( var i = 0; i < result.feed.entries.length; i++ ) {
            var msg = result.feed.entries[i].title;
            if ( bar.isNotNullOrEmpty(bar.settings.rss.linkText) ){
              msg += ' <a href="' + result.feed.entries[i].link + '" target="' + bar.settings.rss.linkTarget + '">' + bar.settings.rss.linkText + '</a>';
            };
            bar.settings.messages.push(msg);
          }
        };

        bar.message.stop().css({ 'left': 0, 'opacity': 100 });
        bar.messageCycle();
      });
    },
    
    loadTwitter: function() { // loads the twitter api
      var timeline_url = "http://twitter.com/statuses/user_timeline/" + bar.settings.twitter.user + 
        ".json?callback=?&page=1&count="+bar.settings.twitter.maxTweets;

      jQuery.ajax({
        url: timeline_url, 
        dataType: 'json',
        success: function(data) {
         
          //Step through each tweet.
          jQuery.each(data, function(i, item) {
            var msg = bar.formatTweetHtml(item.text);
            bar.settings.messages.push(msg);          
          });
          
          bar.message.stop().css({ 'left': 0, 'opacity': 100 });
          bar.messageCycle();
        },
        error: function() {
          alert('There was a problem connecting to Twitter');
        }
      });	      
    },
    
    // some regex code from http://www.dustindiaz.com/basement/ify.html
    formatTweetHtml: function(tweet) {
      // This function formats the tweet body text

      tweet=' '+tweet;

      // The tweets arrive as plain text, so we replace all the textual URLs with hyperlinks
      tweet = tweet.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g, function(link, m1, m2, m3, m4) {
          var http = m2.match(/w/) ? 'http://' : '';
          return '<a class="twtr-hyperlink" target="_blank" href="' + http + m1 + '">' + m1 + '</a>' + m4;
        });

      // Replace the mentions
      tweet = tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20})/g, function(m, username) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name=' + username + '">@' + username + '</a>';
        });
        
      // Replace the lists
      tweet = tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20}\/\w+)/g, function(m, userlist) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/' + userlist + '">@' + userlist + '</a>';
        });      
      
      // Replace the hashtags
      tweet = tweet.replace(/(^|\s+)#(\w+)/gi, function(m, before, hash) {
          return before + '<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23' + hash + '">#' + hash + '</a>';
        });
      

      return tweet;    
    },    

    expand: function(e) { // expands the bar
      if ( typeof e != 'undefined' && e != null && typeof e.preventDefault == 'function' ) { e.preventDefault(); }
      if ( !bar.isOpen ) {
        bar.openButton.animate({ 'height': 0 }, bar.settings.speed);
        bar.openButtonContainer.animate({ 'height': 0 }, bar.settings.speed, function(){
          bar.container.animate({ 'height': bar.settings.height }, bar.settings.speed, bar.settings.easing).css({'border-bottom': bar.settings.border });
          bar.wrapper.animate({ 'height': bar.settings.height + 5 }, bar.settings.speed, bar.settings.easing);
          bar.message.show();
          bar.left.show();
          bar.right.show();          
          if ( bar.settings.positioning == 'fixed' ) {
            $('html').animate({ 'margin-top': '+=' + (bar.settings.height + 5) }); 
          } else {
            $('html').css({ 'margin-top': bar.htmlMarginTop + 'px' }); 
          };
          bar.wrapper.focus();
          bar.isOpen = true;
          bar.messageCycle();
        });
        if ( bar.settings.enableCookie ) { bar.setCookie('foobar-state', true, 1); }
      };
    },

    collapse: function(e) { // collapses the bar
      if ( typeof e != 'undefined' && e != null && typeof e.preventDefault == 'function' ) { e.preventDefault(); }
      if ( bar.isOpen ) {
		    bar.container.animate({ 'height': 0 }, bar.settings.speed).css({'border': 'none' });
        if ( bar.settings.positioning == 'fixed' ) { $('html').animate({ 'margin-top': '-=' + (bar.settings.height + 5) }); }
        else { $('html').css({ 'margin-top': bar.htmlMarginTop + 'px' }); };
        bar.wrapper.animate({ 'height': 5 }, bar.settings.speed, function(){
          bar.message.hide();
          bar.left.hide();
          bar.right.hide();          
          bar.openButtonContainer.animate({ 'height': bar.settings.collapsedButtonHeight + 11 }, bar.settings.speed, bar.settings.easing);
          bar.openButton.animate({ 'height': bar.settings.collapsedButtonHeight }, bar.settings.speed, bar.settings.easing);
        });
        bar.isOpen = false;
        if ( bar.settings.enableCookie ) { bar.setCookie('foobar-state', false, 1); }
      };
    },
    
    setExpanded: function() { // sets the bar to the expanded state, no animates occur when using this function
      bar.container.height(bar.settings.height).css({'border-bottom': bar.settings.border });
      bar.wrapper.height(bar.settings.height + 5);
      bar.openButtonContainer.add(bar.openButton).height(0);
      if ( bar.settings.positioning == 'fixed' ) {
        $('html').css({ 'margin-top': (bar.htmlMarginTop <= 0) ? (bar.settings.height + 5) + 'px' : (bar.htmlMarginTop + (bar.settings.height + 5)) + 'px' });
      } else { $('html').css({ 'margin-top': bar.htmlMarginTop + 'px' }); };
      bar.isOpen = true;
      bar.message.show();
      bar.left.show();
      bar.right.show();
      if ( bar.settings.enableCookie ) { bar.setCookie('foobar-state', true, 1); }
    },

    setCollapsed: function() { // sets the bar to the collapsed state, no animates occur when using this function
      bar.container.height(0).css({'border-bottom': 0 });
      bar.wrapper.height(5);
      bar.openButtonContainer.height(bar.settings.collapsedButtonHeight + 11);
      bar.openButton.height(bar.settings.collapsedButtonHeight);
      if ( bar.settings.positioning == 'fixed' ) {
        $('html').css({ 'margin-top': (bar.htmlMarginTop <= 0) ? 0 + 'px' : (bar.htmlMarginTop - (bar.settings.height + 5)) + 'px' });
      } else { $('html').css({ 'margin-top': bar.htmlMarginTop + 'px' }); };
      bar.isOpen = false;
      bar.message.hide();
      bar.left.hide();
      bar.right.hide();
      if ( bar.settings.enableCookie ) { bar.setCookie('foobar-state', false, 1); }
    },

    pauseMessages : function() {
      bar.messageHover = true;
    },

    resumeMessages: function() {
      bar.messageHover = false;
    },

    apply: function( settings ) {
      wasinit = true;
      bar.settings = settings;
      if ( !bar.initialized ) { 
        bar.initialize(); wasinit = false; 
      } else {
        bar.reset(); //reset some values please
      }
      
      // check that the messagesScrollDirection is either left or right and if not set to default
      if ( settings.messagesScrollDirection != 'left' && settings.messagesScrollDirection != 'right' ) {
        settings.messagesScrollDirection = defaults.messagesScrollDirection;
      };
      
      // set the height for all the bar elements
      bar.wrapper.height(bar.settings.height + 5);
      bar.openButtonContainer.height(bar.settings.collapsedButtonHeight + 11); // 11 to allow for shadow around open tab
      bar.openButton.height(bar.settings.collapsedButtonHeight);
      bar.container.add(bar.right).add(bar.left).add(bar.center).add(bar.message)
        .add(bar.closeButtonContainer).add(bar.closeButton)
        .height(bar.settings.height);

      // set the line height for all bar elements
      bar.right.add(bar.left).add(bar.center).add(bar.message).css({ 'line-height': bar.settings.height + 'px' });

      // set the background color of the bar
      bar.container.add(bar.openButton).css({ 'background-color': bar.settings.backgroundColor });
      
      // set the border for the bar
      bar.container.css({ 'border-bottom': bar.settings.border });
      bar.openButton.css({ 'border': bar.settings.border, 'border-top': 'none' });

      // set the position of the div that contains the open button
      bar.openButtonContainer.css({ 'top': bar.htmlMarginTop + 'px' });

      // apply the css class for the button theme
      bar.openButton.add(bar.closeButton).removeClass();
      bar.openButton.addClass('foobar-open-button');
      bar.closeButton.addClass('foobar-close-button');
      bar.openButton.add(bar.closeButton).addClass(settings.buttonTheme);

      // display the shadow or not
      if ( bar.settings.enableShadow ) { bar.shadow.show(); bar.openButtonContainer.addClass('shadow'); }
      else { bar.shadow.hide(); bar.openButtonContainer.removeClass('shadow'); };
      
      // apply the message styles either class or inline styles
      if ( bar.isNotNullOrEmpty(bar.settings.messageClass) ){
        bar.message.addClass(bar.settings.messageClass);
      } else {
        if (bar.isNotNullOrEmpty(bar.settings.fontFamily)){ bar.message.css('font-family', bar.settings.fontFamily); };
        if (bar.isNotNullOrEmpty(bar.settings.fontSize)){ bar.message.css('font-size', bar.settings.fontSize); };
        if (bar.isNotNullOrEmpty(bar.settings.fontColor)){ bar.message.css('color', bar.settings.fontColor); };
        if (bar.isNotNullOrEmpty(bar.settings.fontShadow)){ bar.message.css('text-shadow', bar.settings.fontShadow); };
      };
      
      // Create and position the social bar
      if ( bar.settings.positionSocial == 'left' || bar.settings.positionSocial == 'right') {
        if ( bar.settings.social.profiles.length > 0 ){
          var $social = $('.foobar-social').length > 0 ? $('.foobar-social') : $('<ul/>').addClass('foobar-social');
          $social.empty();

          var $text = $('<li/>').text(bar.settings.social.text).css({ 'height': bar.settings.height, 'line-height': bar.settings.height + 'px' });
          if ( bar.isNotNullOrEmpty(bar.settings.socialClass) ){
            $text.addClass(bar.settings.socialClass);
          } else {
            $text.css({ 'padding-right': '10px', 'padding-left': '10px' });
            if ( bar.isNotNullOrEmpty(bar.settings.social.fontFamily) ){ $text.css('font-family', bar.settings.social.fontFamily); };
            if ( bar.isNotNullOrEmpty(bar.settings.social.fontSize) ){ $text.css('font-size', bar.settings.social.fontSize); };
            if ( bar.isNotNullOrEmpty(bar.settings.social.fontColor) ){ $text.css('color', bar.settings.social.fontColor); };
            if (bar.isNotNullOrEmpty(bar.settings.social.fontShadow)){ $text.css('text-shadow', bar.settings.social.fontShadow); };
          };
          $social.append($text);

          pdef = { 'name': null, 'url': null, 'image': null, 'target': '_blank' }; // default template for social profiles
          $.each(bar.settings.social.profiles, function(i, p){
            profile = $.extend({}, pdef, p);
            if ( profile.name != null && profile.url != null && profile.image != null ) {
              var $a = $('<a/>').attr('href', profile.url).attr('title', profile.name).attr('target', profile.target)
                .css({ 'background': "url('" + profile.image + "') no-repeat center center", 'height': bar.settings.height });

              $social.append($('<li/>').css({ 'height': bar.settings.height }).append($a));
            };
          });

          if ( bar.settings.positionSocial == 'right' ) {
            $social.css('float', 'right');
            bar.right.append($social);
          } else if ( bar.settings.positionSocial == 'left' ) {
            $social.css('float', 'left');
            bar.left.append($social);
          };
        } else { $('.foobar-social').remove(); };
      } else { $('.foobar-social').remove(); };
      
      //add custom HTML to the right bar
      if ( bar.isNotNullOrEmpty(bar.settings.rightHtml) ) {
        bar.right.append(bar.parseHtml(bar.settings.rightHtml));
      }
      
      //add custom HTML to the left bar
      if ( bar.isNotNullOrEmpty(bar.settings.leftHtml) ) {
        bar.left.append(bar.parseHtml(bar.settings.leftHtml));
      }      
      
      // Set the positioning of the bar
      if ( bar.settings.positioning == 'fixed' ) {
        bar.wrapper.css({ 'position': 'fixed', 'top': bar.htmlMarginTop + 'px', 'left': '0px' });
        bar.openButtonContainer.css({ 'position': 'fixed' });
      } else {
        bar.wrapper.css({ 'position': 'relative', 'top': 0, 'left': 0 });
        bar.openButtonContainer.css({ 'position': 'absolute' });
      };

      // Set the position of the close button
      if ( bar.settings.positionClose == 'right' ) {
        if (!bar.isNotNullOrEmpty(bar.settings.leftWidth)) { bar.left.css('width', '25%'); }
        if (!bar.isNotNullOrEmpty(bar.settings.rightWidth)) { bar.right.css('width', '20%'); }
        bar.closeButtonContainer.css('float', 'right');
        bar.openButtonContainer.css({'left': 'auto', 'right': '0px'});
      } else if ( bar.settings.positionClose == 'left' ) {
        if (!bar.isNotNullOrEmpty(bar.settings.leftWidth)) { bar.left.css('width', '20%'); }
        if (!bar.isNotNullOrEmpty(bar.settings.rightWidth)) { bar.right.css('width', '25%'); }
        bar.closeButtonContainer.css('float', 'left');
        bar.openButtonContainer.css({'right': 'auto', 'left': '0px'});
      } else {
        if (!bar.isNotNullOrEmpty(bar.settings.leftWidth)) { bar.left.css('width', '25%'); }
        if (!bar.isNotNullOrEmpty(bar.settings.rightWidth)) { bar.right.css('width', '25%'); }      
      };
      
      if (bar.isNotNullOrEmpty(bar.settings.leftWidth)) { bar.left.css('width', bar.settings.leftWidth); }
      if (bar.isNotNullOrEmpty(bar.settings.rightWidth)) { bar.right.css('width', bar.settings.rightWidth); }
      if (bar.isNotNullOrEmpty(bar.settings.centerWidth)) { bar.center.css('width', bar.settings.centerWidth); }
      
      var cookie = bar.getCookie('foobar-state');
      if ( cookie == null || !bar.settings.enableCookie ) {
        if ( !bar.settings.enableCookie ) { bar.deleteCookie('foobar-state'); }
        switch ( bar.settings.display ){
          case 'onscroll':
            bar.setCollapsed();
            $(window).one('scroll', function(){ setTimeout(bar.expand, bar.settings.displayDelay); });
            break;
          case 'delayed':
            bar.setCollapsed();
            setTimeout(bar.expand, bar.settings.displayDelay);
            break;
          case 'collapsed':
            bar.setCollapsed();
            break;
          case 'expanded':
          default:
            bar.setExpanded();
            break;
        };
      } else {
        cookie == "true" ? bar.setExpanded() : bar.setCollapsed();
      };

      bar.openButton.unbind().click(bar.expand);
      bar.closeButton.unbind().click(bar.collapse);

      //finally, setup the messages

      //clear all previously created messages
      $('.foobar-message-wrapper').remove();
      bar.messageHover = false;
      bar.messageIndex = 0;
      bar.currentMesasgeIndex = -1;

      var handleMessages = true;

      if ( bar.settings.twitter.enabled && bar.isNotNullOrEmpty(bar.settings.twitter.user) ) {
        handleMessages = false;
        bar.loadTwitter();
      };

      // Handle the rss for the bar
      if ( bar.settings.rss.enabled && bar.isNotNullOrEmpty(bar.settings.rss.googleAPIKey) && bar.isNotNullOrEmpty(bar.settings.rss.url) ){
        handleMessages = false;
        if ( bar.isGoogleLoaded() && bar.isFeedsLoaded() ){ bar.loadRss(); }
        else if ( bar.isFeedsLoaded() ) { bar.loadFeeds(); }
        else { bar.loadGoogle(); };
      };

      if (handleMessages) {
        // Handle the messages for the bar
        bar.message.stop(true, false).css({ 'opacity': 100 });
        bar.messageCycle();
      };

    }
  };

})(jQuery);