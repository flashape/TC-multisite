<?php

if (!function_exists('json_encode')) {
    function json_encode($content, $assoc=false) {
        require_once ( dirname(__FILE__) . '/json.php' );
        if ($assoc) {
            $json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
        }
        else {
            $json = new Services_JSON;
        }
        return $json->encode($content);
    }
}

if (!function_exists('fix_hex_color')) {
    function fix_hex_color($color) {
      if (strpos($color, '#', 0) === 0) {
        return $color;
      }
      return '#'.$color;
    }
}

if (!class_exists('FoobarJSGenerator')) {

  class FoobarJSGenerator {
    function generate($meta, $options, $base_url) {

      if (!is_array($meta)) return '';

      $backgroundColor = fix_hex_color($meta["backgroundColor"]);
      if (FoobarJSGenerator::get_meta("forceTransparent",$meta)=='on') {
        $backgroundColor = 'transparent';
      }
      
      $messagesDelay = FoobarJSGenerator::get_meta("messagesDelay", $meta);
      if (!empty ($messagesDelay)) {
        $messagesDelay = intval($messagesDelay) * 1000; //convert seconds to milliseconds
      }

      $position = $meta["positioning"];
      if ($position == 'fixed') { $position = 'top'; }

      $enableShadow = (FoobarJSGenerator::get_meta("hideShadow",$meta)=='on') ? 'false' : 'true';

      $displayDelay = FoobarJSGenerator::get_meta("displayDelay", $meta)*1000;

      $messagesDelay = FoobarJSGenerator::convert_to_milliseconds(FoobarJSGenerator::get_meta("messagesDelay", $meta));

      $messagesScrollDelay = FoobarJSGenerator::convert_to_milliseconds(FoobarJSGenerator::get_meta("messagesScrollDelay", $meta));

      $enableCookie = ((FoobarJSGenerator::get_meta("enableCookie",$meta)=='on') ? 'true' : 'false');
      
      if ($enableCookie == 'true' && is_admin()) {
        $enableCookie = 'false, //forced to be false so it shows in the admin';
      }

      $enableRandomMessage = ((FoobarJSGenerator::get_meta("enableRandomMessage",$meta)=='on') ? 'true' : 'false');

      $disableScrolling = ((FoobarJSGenerator::get_meta("disableScrolling",$meta)=='on') ? 'false' : 'true');

      $ignoreHtmlMarginTop = ((FoobarJSGenerator::get_meta("ignoreHtmlMarginTop",$meta)=='on') ? 'true' : 'false');

      $disablePushDown = ((FoobarJSGenerator::get_meta("disablePushDown",$meta)=='on') ? 'false' : 'true');
      
      $rtl = ((FoobarJSGenerator::get_meta("rtl",$meta)=='on') ? 'true' : 'false');

      $messages = FoobarJSGenerator::get_meta("messages", $meta);

     
      $cookieDuration = FoobarJSGenerator::get_meta("cookieDuration", $meta);
      if (empty($cookieDuration)) {
        $cookieDuration = "20";
      }
      
      $cookieName = FoobarJSGenerator::get_meta("cookieName", $meta);
      if (empty($cookieName)) {
        $cookieName = "foobar-state";
      }
      
      $enableNavigation = 'true';

      $navigationTheme = FoobarJSGenerator::get_meta("navigationTheme", $meta);
      if (!empty($navigationTheme) && $navigationTheme != 'none') {
        $navigationTheme = ',
        "navigation": "' . $navigationTheme . '"';
      } else {
        $enableNavigation = 'false';
        $navigationTheme= '';
      }

      $button_type = '';
      if ($meta["buttonTypeClose"] == 'on') {
        $button_type = ',
        "button": {
          "type": "close"
        }';
      }
      
      $encode_js = '';
      $encode = array_key_exists('foobar_encode_html', $options) &&
              $options['foobar_encode_html'] == 'on';
      if ( $encode ) {
        $encode_js = '  $foobar("option", { 
    "events": {
      "preRender": function(options) {
        if (this.utils.isNotNullOrEmpty(options.leftHtml)) { options.leftHtml = Encoder.htmlDecode(options.leftHtml); };
        if (this.utils.isNotNullOrEmpty(options.rightHtml)) { options.rightHtml = Encoder.htmlDecode(options.rightHtml); };
        for (var mi = 0; mi < options.messages.length; mi++) { options.messages[mi] = Encoder.htmlDecode(options.messages[mi]); };
      }
    }
  });';
      }
      
      return '
jQuery(function(){
  $foobar({
    "height" : {
      "bar" : ' . $meta["height"] . ',
      "button" : ' . $meta["collapsedButtonHeight"] . '
    },
    
    "width": {
      "left": "' . $meta["leftWidth"] . '",
      "center": "' . $meta["centerWidth"] . '",
      "right": "' . $meta["rightWidth"] . '",
      "button": "' . $meta["buttonWidth"] . '"
    },

    "position": {
      "ignoreOffsetMargin": ' . $ignoreHtmlMarginTop . ',
      "bar": "' . $position . '",
      "button": "' . $meta["positionClose"] . '",
      "social": "' . $meta["positionSocial"] . '"
    },    
    
    "display" : {
      "type" : "' . $meta["display"] . '",
      "delay" : ' . $displayDelay . ',
      "speed": ' . $meta["speed"] . ',
      "backgroundColor" : "'.$backgroundColor.'",
      "border" : "solid '.$meta["borderSize"].'px '.fix_hex_color($meta["borderColor"]).'",
      "theme": {
        "bar": "' . $meta["buttonTheme"] . '"'.$navigationTheme.'
      },
      "easing" : "' . $meta["easing"] . '",
      "shadow" : ' . $enableShadow . ',
      "adjustPageHeight" : ' . $disablePushDown . ',
      "rtl" : ' . $rtl . $button_type . '
    },'.
    
    FoobarJSGenerator::generate_messages($messages, $encode).
    
    '
    "message": {
      "delay": ' . $messagesDelay . ',
      "fadeDelay": ' . $meta["messagesFadeDelay"] . ',
      "random": ' . $enableRandomMessage . ',
      "navigation": ' . $enableNavigation . ',
      "scroll": {
        "enabled": ' . $disableScrolling . ',
        "speed": ' . $meta["messagesScrollSpeed"] . ',
        "delay": ' . $messagesScrollDelay . ',
        "direction": "left"
      },
      '.FoobarJSGenerator::generate_styling($meta).'
    }'.
    
    FoobarJSGenerator::output_if_nd($meta["leftHtml"], "", ',
    "leftHtml" : "' . WPPBUtils::replace_newline ( FoobarJSGenerator::process_html( trim (json_encode($meta["leftHtml"]) , '"'), $encode ) ) . '"' ).
    
    FoobarJSGenerator::output_if_nd($meta["rightHtml"], "", ',
    "rightHtml" : "' . WPPBUtils::replace_newline ( FoobarJSGenerator::process_html ( trim (json_encode($meta["rightHtml"]) , '"'), $encode ) ) . '"' ).

    FoobarJSGenerator::output_if_nd($enableCookie, "false", ',
    "cookie": {
      "enabled": ' . $enableCookie . ',
      "name": "' . $cookieName . '",
      "duration": ' . $cookieDuration . '
    }').

    FoobarJSGenerator::generate_social($meta, $options, $base_url).
    FoobarJSGenerator::generate_rss($meta).
    FoobarJSGenerator::generate_twitter($meta).
    FoobarJSGenerator::generate_ssl().'
    
  });
  
'.$encode_js.'
'.$meta["customJS"].'
'.$options['custom_js'].'
});';

    }
    
    function process_html($input, $encode) {
      if ($encode) {
        return htmlentities($input);
      }
      
      return $input;
    }

    function generate_styling($meta) {
      $styling = $meta["styling"];
      if ( $styling == "none" ) {
        return '"cssClass": "__none",';
      } else if ( $styling == "normal" ) {
      
        if ($meta["useFontShadow"] == "on") {
          $fontShadow = '"shadow" : "0 1px 0 '.fix_hex_color($meta["fontShadow"]).'"';
        } else {
          $fontShadow = '"shadow" : "none"';
        }

        if ($meta["useAFontShadow"] == "on") {
          $aFontShadow = '"shadow" : "0 1px 0 '.fix_hex_color($meta["aFontShadow"]).'"';
        } else {
          $aFontShadow = '"shadow" : "none"';
        }

        if ($meta["useAHoverFontShadow"] == "on") {
          $aHoverFontShadow = '"shadow" : "0 1px 0 '.fix_hex_color($meta["aHoverFontShadow"]).'"';
        } else {
          $aHoverFontShadow = '"shadow" : "none"';
        }
        
        return '"font": {
        "family": "'.$meta["fontFamily"].'",
        "size": "'.$meta["fontSize"].'pt",
        "color": "'.fix_hex_color($meta["fontColor"]).'",
        ' . $fontShadow . '
      },
      "aFont": {
        "family": "'.$meta["aFontFamily"].'",
        "size": "'.$meta["aFontSize"].'pt",
        "color": "'.fix_hex_color($meta["aFontColor"]).'",
        "decoration": "'.$meta["aFontDecoration"].'",
        ' . $aFontShadow . ',
        "hover": {
          "color": "'.fix_hex_color($meta["aHoverFontColor"]).'",
          "decoration": "'.$meta["aHoverFontDecoration"].'",
          ' . $aHoverFontShadow . '
        }
      }';
        
      } else {
        return '"cssClass": "'.$meta["messageClass"].'",';
      }
    }

    function generate_messages($messages, $encode) {
      if ( is_array($messages) ) {
        $message_js = '
    "messages": [';
        foreach ($messages as $message) {
          $message_js .= ('
      "' . WPPBUtils::replace_newline ( FoobarJSGenerator::process_html ( trim (json_encode($message) , '"'), $encode ) ) . '",');
        }
        if (WPPBUtils::ends_with($message_js, ',')) {
          //cut off last char
          $message_js = substr($message_js, 0, -1);
        }
        $message_js .= '
    ],';
        return $message_js;
      } else {
        return '';
      }
    }

    function generate_social($meta, $options, $base_url) {
      $img_src_url_base = $base_url . 'images/social/';
      
      if ($meta["socialUseFontShadow"] == "on") {
        $shadow = '"shadow" : "0 1px 0 '.fix_hex_color($meta["socialFontShadow"]).'"';
      } else {
        $shadow = '"shadow" : "none"';
      }
      
      $socialFontFamily = $meta["socialFontFamily"];
      if (empty($socialFontFamily)) {
        $socialFontFamily = 'Verdana';
      }
      
      $socialFontSize = $meta["socialFontSize"];
      if (empty($socialFontSize)) {
        $socialFontSize = '10';
      }
      
      $socialFontColor = $meta["socialFontColor"];
      if (empty($socialFontColor)) {
        $socialFontColor = '#fff';
      }      
          
      $social_js = ',
    "social" : {
      "text" : "' . $meta["socialText"] . '",
      "font": {
        "family": "' . $socialFontFamily . '",
        "size": "' . $socialFontSize . 'pt",
        "color": "' . fix_hex_color($socialFontColor) . '",
        ' . $shadow . '
      }';

      if ( array_key_exists("overrideSocial", $meta) && $meta["overrideSocial"] == "on" ) {
        //load the profiles specific to this foobar
        $socials = $meta["socials"];
      } else {
        //load the default profiles from the plugin settings
        $socials = $options['socials'];
      }

      if ( is_array($socials) ) {
        $social_js .= ',
      "profiles": [';
        foreach ($socials as $profile) {
          $social_img_icon = $profile['icon'];
          if ( !FoobarJSGenerator::str_contains ( $social_img_icon, '://' ) ) {
            $social_img_icon = $img_src_url_base . $social_img_icon;
          }

          $social_js .= ('
        {"name" : "' . str_replace( '"', '\"', $profile["name"] ) . '",');
          $social_js .= ('"url" : "' . str_replace( '"', '\"', $profile["url"] ) . '",');
          $social_js .= ('"image" : "' . str_replace( '"', '\"', $social_img_icon ) . '",');
          $social_js .= ('"target" : "_blank"},');
        }
        if (WPPBUtils::ends_with($social_js, ',')) {
          //cut off last char
          $message_js = substr($social_js, 0, -1);
        }
        $social_js .= '
      ]';
      }
      $social_js .= '
    }';

      return $social_js;
    }

    function generate_ssl() {
      if (is_ssl()) {
        return ',
    "ssl" : true';
      }
    }
    
    function generate_rss($meta) {
      if (array_key_exists("rssEnabled", $meta) && $meta["rssEnabled"] == "on") {
        return ',
    "rss" : {
      "enabled": true,
      "url": "' . $meta["rssUrl"] . '",
      "maxResults":' . $meta["rssMaxResults"] . ',
      "linkText": "' . $meta["rssLinkText"] . '",
      "linkTarget": "' . $meta["rssLinkTarget"] . '"
    }';
      } else { 
        return '';
      }
    }

    function generate_twitter($meta) {
      if (array_key_exists("twitterEnabled", $meta) && $meta["twitterEnabled"] == "on") {
        return ',
    "twitter" : {
      "enabled": true,
      "user": "' . $meta["twitterUser"] . '",
      "maxTweets":' . $meta["twitterMaxTweets"] . '
    }';
      } else {
        return '';
      }
    }

    function output_if($var, $text) {
      if (empty($var)) {
        return '';
      } else {
        return $text;
      }
    }

    //output the text if the value is not the default
    function output_if_nd($var, $default, $text) {
      if (!isset($var)) {
        return '';
      } else {
        if ($var == $default) {
          return '';
        } else {
          return $text;
        }
      }
    }

    function convert_to_milliseconds($seconds) {
      if (!empty ($seconds)) {
        return intval($seconds) * 1000; //convert seconds to milliseconds
      }

      return $seconds;
    }

    function str_contains($haystack, $needle) {
        if (empty($haystack) || empty($needle))
            return false;

        $pos = strpos(strtolower($haystack), strtolower($needle));

        if ($pos === false)
            return false;
        else
            return true;
    }

    function get_meta($key, $meta) {
      if (!is_array($meta)) return null;
      if (!array_key_exists($key, $meta)) return null;

      return $meta[$key];
    }
  }

}
?>