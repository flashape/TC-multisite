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


if (!class_exists('FoobarJSGenerator')) {

  class FoobarJSGenerator {
    function generate($meta, $options, $base_url) {

      if (!is_array($meta)) return '';

      $messagesDelay = FoobarJSGenerator::get_meta("messagesDelay", $meta);
      if (!empty ($messagesDelay)) {
        $messagesDelay = intval($messagesDelay) * 1000; //convert seconds to milliseconds
      }

      $enableShadow = (FoobarJSGenerator::get_meta("hideShadow",$meta)=='on') ? 'false' : 'true';

      $displayDelay = FoobarJSGenerator::get_meta("displayDelay", $meta)*1000;

      $messagesDelay = FoobarJSGenerator::convert_to_milliseconds(FoobarJSGenerator::get_meta("messagesDelay", $meta));

      $messagesScrollDelay = FoobarJSGenerator::convert_to_milliseconds(FoobarJSGenerator::get_meta("messagesScrollDelay", $meta));

      $enableCookie = ((FoobarJSGenerator::get_meta("enableCookie",$meta)=='on') ? 'true' : 'false');

      $messages = FoobarJSGenerator::get_meta("messages", $meta);

      return '
jQuery(function(){
  jQuery.foobar({'.
    FoobarJSGenerator::output_if_nd($meta["height"], "30", '
    "height" : ' . $meta["height"] . ',').
    FoobarJSGenerator::output_if_nd($meta["collapsedButtonHeight"], "30", '
    "collapsedButtonHeight" : ' . $meta["collapsedButtonHeight"] . ',').
    FoobarJSGenerator::output_if_nd($meta["positioning"], "fixed", '
    "positioning" : "' . $meta["positioning"] . '",').'
    "backgroundColor" : "'.$meta["backgroundColor"].'",
    "border" : "solid '.$meta["borderSize"].'px '.$meta["borderColor"].'",'.
    FoobarJSGenerator::output_if_nd($enableShadow, "true", '
    "enableShadow" : ' . $enableShadow . ',').
    FoobarJSGenerator::output_if_nd($meta["display"], "expanded", '
    "display" : "' . $meta["display"] . '",').
    FoobarJSGenerator::output_if_nd($displayDelay, "0", '
    "displayDelay" : ' . $displayDelay . ',').
    FoobarJSGenerator::output_if_nd($meta["speed"], "100", '
    "speed" : ' . $meta["speed"] . ',').
    FoobarJSGenerator::output_if_nd($meta["easing"], "swing", '
    "easing" : "' . $meta["easing"] . '",').
    FoobarJSGenerator::generate_messages($messages).
    FoobarJSGenerator::output_if_nd($messagesDelay, "4000", '
    "messagesDelay" : ' . $messagesDelay . ',').
    FoobarJSGenerator::output_if_nd($meta["messagesFadeDelay"], "500", '
    "messagesFadeDelay" : ' . $meta["messagesFadeDelay"] . ',').
    FoobarJSGenerator::output_if_nd($meta["messagesScrollSpeed"], "50", '
    "messagesScrollSpeed" : ' . $meta["messagesScrollSpeed"] . ',').
    FoobarJSGenerator::output_if_nd($messagesScrollDelay, "2000", '
    "messagesScrollDelay" : ' . $messagesScrollDelay . ',').'
    "buttonTheme" : "'.$meta["buttonTheme"].'",'.
    FoobarJSGenerator::output_if_nd($meta["leftHtml"], "", '
    "leftHtml" : ' . json_encode( $meta["leftHtml"] ) . ',').
    FoobarJSGenerator::output_if_nd($meta["leftWidth"], "", '
    "leftWidth" : "' . $meta["leftWidth"] . 'px",').
    FoobarJSGenerator::output_if_nd($meta["rightHtml"], "", '
    "rightHtml" : ' . json_encode( $meta["rightHtml"] ) . ',').
    FoobarJSGenerator::output_if_nd($meta["rightWidth"], "", '
    "rightWidth" : "' . $meta["rightWidth"] . 'px",').
    FoobarJSGenerator::output_if_nd($enableCookie, "false", '
    "enableCookie" : ' . $enableCookie . ',').
    FoobarJSGenerator::output_if_nd($meta["positionClose"], "right", '
    "positionClose" : "' . $meta["positionClose"] . '",').
    FoobarJSGenerator::output_if_nd($meta["positionSocial"], "left", '
    "positionSocial" : "' . $meta["positionSocial"] . '",').'
    '.FoobarJSGenerator::generate_styling($meta).'
    '.FoobarJSGenerator::generate_social($meta, $options, $base_url).
    FoobarJSGenerator::generate_rss($meta).
    FoobarJSGenerator::generate_twitter($meta).'
  });
});';

    }

    function generate_styling($meta) {
      $styling = $meta["styling"];
      if ( $styling == "normal" ) {
        
        if (array_key_exists("useFontShadow", $meta) && $meta["useFontShadow"] == "on") {
          $fontShadow = '
    "fontShadow" : "0 1px 0 '.$meta["fontShadow"].'",';
        } else {
          $fontShadow = '
    "fontShadow" : "none",';
        }

        if ($meta["useAFontShadow"] == "on") {
          $aFontShadow = '
    "aFontShadow" : "0 1px 0 '.$meta["aFontShadow"].'",';
        } else {
          $aFontShadow = '
    "aFontShadow" : "none",';
        }

        if ($meta["useAHoverFontShadow"] == "on") {
          $aHoverFontShadow = '
    "aHoverFontShadow" : "0 1px 0 '.$meta["aHoverFontShadow"].'",';
        } else {
          $aHoverFontShadow = '
    "aHoverFontShadow" : "none",';
        }

        return '"fontFamily" : "'.$meta["fontFamily"].'",
    "fontSize" : "'.$meta["fontSize"].'pt",
    "fontColor" : "'.$meta["fontColor"].'",'.$fontShadow.'
    "aFontFamily" : "'.$meta["aFontFamily"].'",
    "aFontSize" : "'.$meta["aFontSize"].'pt",
    "aFontColor" : "'.$meta["aFontColor"].'",
    "aFontDecoration" : "'.$meta["aFontDecoration"].'",'.$aFontShadow.'
    "aHoverFontColor" : "'.$meta["aHoverFontColor"].'",
    "aHoverFontDecoration" : "'.$meta["aHoverFontDecoration"].'",'.$aHoverFontShadow;
      } else {
        return '"messageClass" : "'.$meta["messageClass"].'",';
      }
    }

    function generate_messages($messages) {
      if ( is_array($messages) ) {
        $message_js = '
    "messages": [';
        foreach ($messages as $message) {
          $message_js .= ('
      ' . json_encode( $message ) . ',');
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

      $social_js = '"social" : {
        ' . FoobarJSGenerator::output_if($meta["socialText"], '"text" : "' . $meta["socialText"] . '"');

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

    function generate_rss($meta) {
      if (array_key_exists("rssEnabled", $meta) && $meta["rssEnabled"] == "on") {
        return ',
    "rss" : {
      "enabled": true,
      "googleAPIKey": "' . $meta["rssGoogleAPIKey"] . '",
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
      if (empty($var)) {
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