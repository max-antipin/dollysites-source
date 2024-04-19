<?php
function SendLocation(string $url)
{
	$h = 'Location: '.$url;
	header($h);
	echo $h;
	echo '<br />';
	echo 'HTTP_REFERER: ', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '—';
	die;
}
$url = $args[0];
$k = 'dec';
if(isset($_GET[$k]))
 {
	$i = intval($_GET[$k]);
	if($i <= 0) $url = '/';
	else
	 {
		--$i;
		$url = explode('?', $url, 2);
		parse_str($url[1], $q);
		$q[$k] = $i;
		$url[1] = http_build_query($q);
		$url = implode('?', $url);
	 }
 }
SendLocation($url);