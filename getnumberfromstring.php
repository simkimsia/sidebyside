<?php


$test = '[12345]';

getnumberfromstring($test);

function getnumberfromstring($text)
{
	$pattern= '~(?<=\[)(.*?)(?=\])~';
	$matches= array();
	preg_match($pattern, $text, $matches);
				
	var_dump($matches);
}

?>