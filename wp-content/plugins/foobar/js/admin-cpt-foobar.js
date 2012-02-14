jQuery(document).ready(function($) {
    $.foobar_cpt = {
        setup_social_table : function() {
          $('table.social_list tbody tr').removeClass('alternate');

          if ( $("table.social_list tbody tr").length == 0 ) {
            $("table.social_list").hide();
            $("p.no_social_profiles").show();
          } else {
            $("table.social_list").show();
            $("p.no_social_profiles").hide();
          }

          $("table.social_list tbody tr:odd").addClass("alternate");

          //setup social indexes
          $("table.social_list tbody tr").each(function(index){
            $(this).find(".txt_social_name:first").attr("name", "foobar[socials][" + index + "][name]");
            $(this).find(".txt_social_icon:first").attr("name", "foobar[socials][" + index + "][icon]");
            $(this).find(".txt_social_url:first").attr("name", "foobar[socials][" + index + "][url]");
          });
        },

        setup_message_row : function($row) {
          $row.hover(function() {
              $(this.cells[0]).addClass('showDragHandle');
              $(this).find("div.message-row-actions").css({'visibility':'visible'});
            }, function() {
              $(this.cells[0]).removeClass('showDragHandle');
              $(this).find("div.message-row-actions").css({'visibility':'hidden'});
            });
        },

        setup_message_table : function() {
          $('table.message_list tbody tr').removeClass('alternate');

          if ( $("table.message_list tbody tr").length == 0 ) {
            $("table.message_list").hide();
          } else {
            $("table.message_list").show();
          }

          $(".message_list").tableDnD({
            dragHandle: "dragHandle",
            onDrop:function() {
              $.foobar_cpt.setup_message_table();
            }
          });

          $("table.message_list tbody tr:odd").addClass("alternate");

          //setup message indexes
          $("table.message_list tbody tr textarea.txt_message").each(function(index){
            $(this).attr("name", "foobar[messages][" + index + "]");
          });
        },
        
        init : function() {
            
            $('.colors').miniColors();

            $('.checkbox-toggle').checkbox({ theme: 'switch'});

            $('.num-slider').numeric();

            $('.radio').radio();

            $(".button_theme_radio a").click(function() {
                $(".button_theme_radio a").removeClass("selected");

                $(this).addClass("selected");
            });

            //start social events

            $("table.social_list tbody tr").hover(
              function () {
                $(this).find("div.social-row-actions").css({'visibility':'visible'});
              },
              function () {
                $(this).find("div.social-row-actions").css({'visibility':'hidden'});
              }
            );
          
            $("#chk_override_social").change(function() {
                var $rows = $(".row_social_profiles");
                if ( $(this).is(":checked") ) {
                    $rows.show();
                } else {
                    $rows.hide();
                }
            });

            $(".rad_foobar_type").change(function() {
              $("tr.foobar_type_row").hide();

              $("tr.foobar_type_row_" + $(this).val()).show();
            });


            $(".rad_styling").change(function() {
              $("tr.styling_row").hide();

              $("tr.styling_row_" + $(this).val()).show();
            });

            $(".foobar_social_delete").live("click", function(e) {
                e.preventDefault();

                $(this).parents("tr:first").remove();

                $.foobar_cpt.setup_social_table();
            });

            $(".foobar_social_edit").live("click", function(e) {
                e.preventDefault();

                //hide all other editing rows
                $(".social_list tr.row_edit").each(function() {
                  $(this).find(".foobar_social_cancel").click();
                });

                var $row = $(this).parents("tr:first");
                
                $row.find("div.row_content").hide();
                $row.find("div.hidden").show();

                $row.addClass("row_edit");
            });

            $(".foobar_social_cancel").live("click", function(e) {
                e.preventDefault();
                var $row = $(this).parents("tr:first");

                $row.find("div.row_content").show();
                $row.find("div.hidden").hide();

                $row.removeClass("row_edit");
            });

            $(".social_icon_select").live("click", function(e) {
              e.preventDefault();
              var $box = $(".social_icon_selector");
              var height = $box.height();
              var width = $box.width();
              var offset = $(".social_icon_select:visible").offset();
              $box.show().offset({ left : (offset.left - (width/2)), top:(offset.top - height - 16)});

              $(document).bind("mousedown.icon_select", function(e){

                var $target = $(e.target);
                if ( $target.parents().andSelf().is('.social_icon_selector') ) {
                  var src = $(e.target).data("src");
                  if ( $target.is("a") ) { src = $target.find("img:first").data("src"); }
                  $(".txt_social_icon:visible").val( src );
                }

                $(".social_icon_selector").hide();
                $(document).unbind("mousedown.icon_select");

              });
            });

            $(".foobar_social_update").live("click", function(e) {
                e.preventDefault();

                var new_name = $(".txt_social_name:visible").val();
                var new_icon = $(".txt_social_icon:visible").val();
                var new_url = $(".txt_social_url:visible").val();

                new_icon = $("#hdn_social_icon_base").val() + new_icon;

                var $row = $(this).parents("tr:first");

                $row.find(".element_social_name").html(new_name);
                $row.find(".element_social_icon").attr("src", new_icon);
                $row.find(".element_social_url").html(new_url);

                $row.find("div.row_content").show();
                $row.find("div.hidden").hide();

                $row.removeClass("row_edit");
            });

            $(".foobar_social_add").click(function(e) {
                e.preventDefault();
                var count = $(".social_list tbody tr").length + 1;
                var $new_row = $(".social_list_add tr:first").clone().attr("id", "social_row_"+count);
                $(".social_list tbody").append($new_row);
                $new_row.find(".foobar_social_edit").click();
                $new_row.hover(
                  function () {
                    $(this).find("div.social-row-actions").css({'visibility':'visible'});
                  },
                  function () {
                    $(this).find("div.social-row-actions").css({'visibility':'hidden'});
                  }
                );
                
                $.foobar_cpt.setup_social_table();

                $(".txt_social_name:visible").focus();
            });

            // end social events

            // start messages events

            $.foobar_cpt.setup_message_table();

            $.foobar_cpt.setup_message_row($("table.message_list tbody tr"));

            $(".foobar_message_delete").live("click", function(e) {
                e.preventDefault();

                $(this).parents("tr:first").remove();

                $.foobar_cpt.setup_message_table();
            });

            $(".foobar_message_edit").live("click", function(e) {
                e.preventDefault();

                //hide all other editing rows
                $(".message_list tr.row_edit").each(function() {
                  $(this).find(".foobar_message_cancel").click();
                });

                var $row = $(this).parents("tr:first");

                $row.find("div.row_content").hide();
                $row.find("div.hidden").show();

                $row.addClass("row_edit");

                $(".txt_message:visible").focus();
            });

            $(".foobar_message_cancel").live("click", function(e) {
                e.preventDefault();
                var $row = $(this).parents("tr:first");

                $row.find("div.row_content").show();
                $row.find("div.hidden").hide();

                $row.removeClass("row_edit");
            });

            $(".foobar_message_update").live("click", function(e) {
                e.preventDefault();

                var new_message = $(".txt_message:visible").val();

                var $row = $(this).parents("tr:first");

                $row.find(".element_message").html(new_message);

                $row.find("div.row_content").show();
                $row.find("div.hidden").hide();

                $row.removeClass("row_edit");
            });

            $(".foobar_message_add").click(function(e) {
                e.preventDefault();
                var count = $(".message_list tbody tr").length + 1;
                
                var $new_row = $(".message_list_add tr:first").clone();

                //setup attrib for this specific row
                $new_row.attr("id", "message_row_"+count);
                //$new_row.find("textarea.txt_message").attr("name", "foobar[messages][" + count + "]");

                $(".message_list tbody").append($new_row);
                $new_row.find(".foobar_message_edit").click();

                $.foobar_cpt.setup_message_row($new_row);

                $.foobar_cpt.setup_message_table();

                $(".txt_message:visible").focus();
            });

            //end message events

            return false;
        }
    }; //End of admin_tabs

    $.foobar_cpt.init();
});