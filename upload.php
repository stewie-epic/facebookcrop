<?php
	$facebook->setFileUploadSupport(true);
	
	$img = '/tmp/mypic.png';
	
	$photo = $facebook->api(
	'/me/photos', 
	'POST',
	array(
    'source' => '@' . $img,
    'message' => 'Photo uploaded via the PHP SDK!'
	)
	);
	
?>