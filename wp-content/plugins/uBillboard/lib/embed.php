<?php

/**
 *	Function, oEmbed handler, will query the service
 *	and return the embed code
 *
 *	@param string $url URL address of the content to embed
 *	@param string|int $width max width of the frame for the content
 *	@param string|int $height max height of the frame for the content
 *	
 *	@return string error or the embed code
 */
function uds_billboard_oembed($url, $width, $height)
{
	$services = array(
		'youtube.com' => 'http://www.youtube.com/oembed?',
		'vimeo.com' => 'http://www.vimeo.com/api/oembed.json?'
	);
	
	$oembed = '';
	foreach($services as $pattern => $endpoint) {
		if(strpos($url, $pattern) !== false) {
			$oembed = $endpoint . 'url='.urlencode($url)."&maxwidth=$width&maxheight=$height&format=json";
		}	
	}
	
	if(empty($oembed)) {
		return __('Service not supported', uds_billboard_textdomain);
	}

	$response = @file_get_contents($oembed);
	
	if(empty($response)) {
		return __('There was an error when loading the video', uds_billboard_textdomain);
	}
	
	$response = json_decode($response);

	return $response;
}

?>