jQuery(document).ready(function($) {
    $.admin_tabs = {
    
        init : function() {
          $("a.nav-tab").click( function(e) {
              e.preventDefault();
              
              $this = $(this);

              $this.parents(".nav-tab-wrapper:first").find(".nav-tab-active").removeClass("nav-tab-active");
              $this.addClass("nav-tab-active");

              $(".nav-container:visible").hide();
              
              var hash = $this.attr("href");

              $(hash+'_tab').show();
              
              //fix the referer so if changes are saved, we come back to the same tab
              var referer = $("input[name=_wp_http_referer]").val();
              if (referer.indexOf("#") >= 0) {
                referer = referer.substr(0, referer.indexOf("#")-1);
              }
              referer += hash;
              $("input[name=_wp_http_referer]").val(referer);
              
              window.location.hash = hash;
          });

          if (window.location.hash) {
            $('a.nav-tab[href="' + window.location.hash + '"]').click();
          }

          return false;
        }
        
    }; //End of admin_tabs

    $.admin_tabs.init();

    $("#foobar_version_check").click(function(e) {
      e.preventDefault();
      var $throbber = $("#foobar_version_check_throbber");
      $throbber.show();
      var check_url = $("#foobar_version_check_url").val();
      $.ajax({
        url: check_url,
        success: function( data ) {
          $("#foobar_version_check_container").html(data).show();
          $throbber.hide();
        },
        error: function() {
          alert('There was a problem getting the latest version!');
          $throbber.hide();
        }
      });
    });
});