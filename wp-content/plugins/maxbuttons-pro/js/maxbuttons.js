function mbpro_loadFontFamilyStylesheet(font_family) {
	var font_family_url = mbpro_getFontFamilyUrl(font_family);
	if (font_family_url != "") {
		jQuery("head").append("<link rel='stylesheet' type='text/css' href='" + font_family_url + "' />");
	}
}

function mbpro_getFontFamilyUrl(font_family) {
	if (font_family == "Aclonica") return "http://fonts.googleapis.com/css?family=Aclonica";
	if (font_family == "Aldrich") return "http://fonts.googleapis.com/css?family=Aldrich";
	if (font_family == "Anton") return "http://fonts.googleapis.com/css?family=Anton";
	if (font_family == "Bevan") return "http://fonts.googleapis.com/css?family=Bevan";
	if (font_family == "Candal") return "http://fonts.googleapis.com/css?family=Candal";
	if (font_family == "Cantarell") return "http://fonts.googleapis.com/css?family=Cantarell";
	if (font_family == "Cherry Cream Soda") return "http://fonts.googleapis.com/css?family=Cherry+Cream+Soda";
	if (font_family == "Copse") return "http://fonts.googleapis.com/css?family=Copse";
	if (font_family == "Coustard") return "http://fonts.googleapis.com/css?family=Coustard";
	if (font_family == "Cuprum") return "http://fonts.googleapis.com/css?family=Cuprum";
	if (font_family == "Dancing Script") return "http://fonts.googleapis.com/css?family=Dancing+Script";
	if (font_family == "Droid Sans") return "http://fonts.googleapis.com/css?family=Droid+Sans";
	if (font_family == "Droid Sans Mono") return "http://fonts.googleapis.com/css?family=Droid+Sans+Mono";
	if (font_family == "Electrolize") return "http://fonts.googleapis.com/css?family=Electrolize";
	if (font_family == "Francois One") return "http://fonts.googleapis.com/css?family=Francois+One";
	if (font_family == "Lobster") return "http://fonts.googleapis.com/css?family=Lobster";
	if (font_family == "Lobster Two") return "http://fonts.googleapis.com/css?family=Lobster+Two";
	if (font_family == "Luckiest Guy") return "http://fonts.googleapis.com/css?family=Luckiest+Guy";
	if (font_family == "Michroma") return "http://fonts.googleapis.com/css?family=Michroma";
	if (font_family == "Open Sans") return "http://fonts.googleapis.com/css?family=Open+Sans";
	if (font_family == "Orbitron") return "http://fonts.googleapis.com/css?family=Orbitron";
	if (font_family == "Oswald") return "http://fonts.googleapis.com/css?family=Oswald";
	if (font_family == "Pacifico") return "http://fonts.googleapis.com/css?family=Pacifico";
	if (font_family == "Paytone One") return "http://fonts.googleapis.com/css?family=Paytone+One";
	if (font_family == "PT Sans") return "http://fonts.googleapis.com/css?family=PT+Sans";
	if (font_family == "PT Sans Narrow") return "http://fonts.googleapis.com/css?family=PT+Sans+Narrow";
	if (font_family == "Quicksand") return "http://fonts.googleapis.com/css?family=Quicksand";
	if (font_family == "Ubuntu") return "http://fonts.googleapis.com/css?family=Ubuntu";
	if (font_family == "Ubuntu Condensed") return "http://fonts.googleapis.com/css?family=Ubuntu+Condensed";
	if (font_family == "Yanone Kaffeesatz") return "http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz";
	return "";
}

function mbpro_attachMediaUploader(key, fireChangeEvent) {
	jQuery('#' + key + '_button').click(function() {
		text_element = jQuery('#' + key).attr('name');
		button_element = jQuery('#' + key + '_button').attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
	});
	
	window.send_to_editor = function(html) {
		var self_element = text_element;
		imgurl = jQuery('img', html).attr('src');
		jQuery('#' + self_element).val(imgurl);
		
		if (fireChangeEvent) {
			jQuery('#' + self_element).change();
		}
		
		tb_remove();
	};
}
