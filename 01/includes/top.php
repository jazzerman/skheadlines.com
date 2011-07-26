<?php
$currentURL = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$baseURL = "http://{$_SERVER['HTTP_HOST']}".str_replace('includes','',dirname($_SERVER['SCRIPT_NAME'])).'/';

$lifecell_link = "http://{$_SERVER['HTTP_HOST']}/products/lifecell".
				 (@$_SERVER["REQUEST_URI"] ? 	preg_replace(	'/(\/[\d]{2}|)\/(news|wrinkles|antiaging)/',
															'',
															$_SERVER["REQUEST_URI"]	)	:	
												'');
?>