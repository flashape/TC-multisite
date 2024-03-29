<?php
/*
Default options page used by WP_PluginBase
*/
function admin_settings_render_default_page($title, $summary, $plugin_name, $tabs) {
?>
<div class="wrap">
	<div id="icon-options-general" class="icon32">
            <br />
	</div>

	<h2><?php echo $title; ?></h2>
	<?php echo $summary; ?>
	<form action="options.php" method="post">
		<?php settings_fields($plugin_name); ?>
                <?php
                if (!empty($tabs)) {
                    //we have tabs - woot!
                ?>
                <div style="float:left;height:16px;width:16px;"><!-- spacer for tabs --></div>
                <h3 class="nav-tab-wrapper">
                <?php
                    //loop thru the tabs to render the actual tabs at the top
                    $first = true;
                    foreach ($tabs as $tab) {
                        $class = $first ? "nav-tab nav-tab-active" : "nav-tab";
                        echo "<a href='#{$tab['id']}' class='$class'>{$tab['title']}</a>";
                        if ($first) { $first = false; }
                    }
                ?>
                </h3>
                <?php
                    //now loop thru the tabs to render the content containers
                    $first = true;
                    foreach ($tabs as $tab) {
                        $style = $first ? "" : "style='display:none'";

                        echo "<div class='nav-container' id='{$tab['id']}_tab' $style>";
                        do_settings_sections_for_tab($plugin_name, $tab['sections']);
                        echo "</div>";
                        if ($first) { $first = false; }
                    }
                ?>
                <?php
                } else {
                    //no tabs so just render the sections
                    do_settings_sections($plugin_name);
                }
                ?>
		<p class="submit">
			<input name="Submit" class="button-primary" type="submit" value="<?php _e('Save Changes'); ?>" />
		</p>
	</form>
</div>
<?php }

function do_settings_sections_for_tab($page, $sections) {
    global $wp_settings_sections, $wp_settings_fields;

    if ( !isset($wp_settings_sections) || !isset($wp_settings_sections[$page]) )
        return;

    foreach ( (array) $wp_settings_sections[$page] as $section ) {
        if (in_array($section['id'], $sections)) {
            echo "<h3>{$section['title']}</h3>\n";
            call_user_func($section['callback'], $section);
            if ( !isset($wp_settings_fields) || !isset($wp_settings_fields[$page]) || !isset($wp_settings_fields[$page][$section['id']]) )
                continue;
            echo '<table class="form-table">';
            do_settings_fields($page, $section['id']);
            echo '</table>';
        }
    }
}

?>