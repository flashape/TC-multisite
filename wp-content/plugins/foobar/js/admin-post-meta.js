jQuery(document).ready(function($) {
  $.foobar_post_metabox = {          
    init : function() {
      $(".rad_foobar_type").change(function() {
        $("tr.foobar_type_row").hide();

        $("tr.foobar_type_row_" + $(this).val()).show();
      });
    }
  };
  
  $.foobar_post_metabox.init();
});