jQuery(document).ready(function($) {
    $.admin_tabs = {
        init : function() {
                $("a.nav-tab").click( function(e) {
                    e.preventDefault();

                    $this = $(this);

                    $this.parents(".nav-tab-wrapper:first").find(".nav-tab-active").removeClass("nav-tab-active");
                    $this.addClass("nav-tab-active");

                    $(".nav-container:visible").hide();

                    $("#" + $this.attr("rel")).show();
                });
                return false;
            }
    }; //End of admin_tabs

    $.admin_tabs.init();
});